

import os
import re
import json
import datetime
import mysql.connector
import requests
import base64

from mutagen.mp3 import MP3
from mutagen.id3 import ID3, ID3NoHeaderError
from mutagen.asf import ASF


DB_HOST = "localhost"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "housemusickitchen_db"

# GitHub Configurations
GITHUB_USERNAME = "Siphelele-Maphumulo"  # Your GitHub username
GITHUB_REPO = "House-Music-Kitchen"  # Your repository name
GITHUB_FILE_PATH = "Exclusive_Music_List.txt"  # Path in the repo
GITHUB_BRANCH = "main"  # Branch name
GITHUB_TOKEN = os.getenv("GITHUB_TOKEN")  # Securely load token


LABEL = "House Music Kitchen"
GENRE = "Deep House"
PRICE = "1.99"
CURRENT_YEAR = datetime.datetime.now().year
OUTPUT_FILE = "Exclusive_Music_List.txt"
KEEP_ORIGINAL_KEYWORDS = ["Original", "(Deeper Mix)", "Exclusive", "Groove Mix", "Dub", "Vocal Mix", "Vocal Remix", "Radio Edit", "Club Edit"]

def connect_db():
    return mysql.connector.connect(host=DB_HOST, user=DB_USER, password=DB_PASSWORD, database=DB_NAME)

def get_mp3_metadata(file_path):
    try:
        audio = MP3(file_path)
        try:
            tags = ID3(file_path)
            year = tags.get("TDRC", [str(CURRENT_YEAR)])[0]
        except ID3NoHeaderError:
            year = str(CURRENT_YEAR)
        length = f"{int(audio.info.length // 60)}:{int(audio.info.length % 60):02d}" if audio.info else "00:00"
        return {"year": str(year), "length": length}
    except Exception:
        return {"year": str(CURRENT_YEAR), "length": "00:00"}

def get_wma_metadata(file_path):
    try:
        audio = ASF(file_path)
        year = audio.tags.get("WM/Year", [str(CURRENT_YEAR)])[0]
        length = f"{int(audio.info.length // 60)}:{int(audio.info.length % 60):02d}" if audio.info else "00:00"
        return {"year": str(year), "length": length}
    except Exception:
        return {"year": str(CURRENT_YEAR), "length": "00:00"}

def should_keep_original(title):
    # Define keywords that indicate a remix or rework
    remix_keywords = ["Remake", "Remix", "Soulful Mix", "Makeup", "Deeper Mix", "Visitor", "Revisited", "Rework", "Touch", "Chant", "Step", "Bootleg"]
    return any(word in title for word in remix_keywords)

def extract_remixer_from_title(title):
    match = re.search(r"\((.*?)\)", title)
    if match:
        remix_content = match.group(1)
        
        # Check if the title has an apostrophe indicating ownership
        if "'s" in remix_content:
            return remix_content.split("'s")[0].strip()
        
        remix_keywords = ["Remake", "Remix", "Soulful Mix", "Makeup", "Deeper Mix", "Visitor", "Revisited", "Rework", "Touch", "Chant", "Step", "Bootleg"]
        for keyword in remix_keywords:
            if keyword in remix_content:
                parts = remix_content.split(keyword)
                before_keyword = parts[0].strip()
                
                # Count spaces before keyword
                space_count = before_keyword.count(" ")
                
                if space_count > 2:
                    return before_keyword.strip()
                elif space_count <= 2:
                    return before_keyword.strip().split()[-1]
    
    return None

def parse_filename(filename):
    base_name = os.path.splitext(filename)[0]
    match = re.match(r"(.+?)\sft\.\s(.+?)\s-\s(.+)", base_name)
    if match:
        artist, ft_artist, title = match.groups()
    else:
        parts = base_name.split(" - ", 1)
        artist = parts[0]
        title = parts[1] if len(parts) > 1 else "Unknown Title"
        ft_artist = ""

    # Remove any part of the artist name after '&' or a comma
    artist = re.sub(r"([&,]).*$", "", artist).strip()

    remixer = extract_remixer_from_title(title)
    if remixer:
        artist = remixer
    return artist.strip(), ft_artist.strip(), title.strip()

def get_last_id():
    try:
        with open(OUTPUT_FILE, "r", encoding="utf-8") as f:
            tracks = json.load(f)
            if tracks and isinstance(tracks, list):
                return max(track.get("id", 0) for track in tracks)
    except (FileNotFoundError, json.JSONDecodeError):
        return 0
    return 0

def insert_into_db(track_data):
    try:
        connection = connect_db()
        cursor = connection.cursor()
        sql = """
        INSERT INTO music (id, artist, ft_artist, title, label, genre, release_date, duration, price, image, audio)
        VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
        """
        values = (
            track_data["id"],
            track_data["artist"],
            track_data["ft_artist"],
            track_data["title"],
            track_data["label"],
            track_data["genre"],
            track_data["release_date"],
            track_data["duration"],
            track_data["price"],
            track_data["image"],
            track_data["audio"],
        )
        cursor.execute(sql, values)
        connection.commit()
        cursor.close()
        connection.close()
    except mysql.connector.Error as err:
        print(f"Database error: {err}")




# Function to upload/update the file on GitHub
def upload_to_github(file_path):
    try:
        url = f"https://api.github.com/repos/{GITHUB_USERNAME}/{GITHUB_REPO}/contents/{GITHUB_FILE_PATH}"
        
        # Read file content
        with open(file_path, "rb") as file:
            content = file.read()
            encoded_content = base64.b64encode(content).decode("utf-8")

        # Get SHA of the existing file (if it exists)
        response = requests.get(url, headers={"Authorization": f"token {GITHUB_TOKEN}"})
        sha = response.json().get("sha", None) if response.status_code == 200 else None

        # Prepare payload
        payload = {
            "message": "Updated Exclusive Music List",
            "content": encoded_content,
            "branch": GITHUB_BRANCH
        }
        if sha:
            payload["sha"] = sha  # Needed for updating an existing file

        # Make API request
        response = requests.put(url, json=payload, headers={"Authorization": f"token {GITHUB_TOKEN}"})
        
        if response.status_code in [200, 201]:
            print("File successfully uploaded to GitHub.")
        else:
            print(f"GitHub upload failed: {response.json()}")

    except Exception as e:
        print(f"Error uploading to GitHub: {e}")


 

def process_folder(folder_path, start_id):
    current_id = start_id
    tracks = []
    if os.path.exists(OUTPUT_FILE):
        try:
            with open(OUTPUT_FILE, "r", encoding="utf-8") as f:
                tracks = json.load(f)
        except json.JSONDecodeError:
            tracks = []
    for file in os.listdir(folder_path):
        file_path = os.path.join(folder_path, file)
        if file.lower().endswith(".mp3"):
            metadata = get_mp3_metadata(file_path)
        elif file.lower().endswith(".wma"):
            metadata = get_wma_metadata(file_path)
        else:
            continue
        artist, ft_artist, title = parse_filename(file)
        current_id += 1
        track_data = {
            "id": current_id,
            "artist": artist,
            "ft_artist": ft_artist,
            "title": title,
            "label": LABEL,
            "genre": GENRE,
            "release_date": metadata["year"],
            "duration": metadata["length"],
            "price": PRICE,
            "image": f"img/{artist.replace(' ', '_')}.png",
            "audio": f"tracks/{file}"
        }
        tracks.append(track_data)
    with open(OUTPUT_FILE, "w", encoding="utf-8") as f:
        json.dump(tracks, f, indent=4, ensure_ascii=False)

    return current_id, tracks

folder_paths = []
while True:
    folder_path = input("Enter the folder path for music files: ").strip()
    if os.path.isdir(folder_path):
        folder_paths.append(folder_path)
    else:
        print("Invalid folder path! Please enter a valid folder.")
    add_more = input("Would you like to add another folder? (yes/no): ").strip().lower()
    if add_more != "yes":
        break
starting_id = get_last_id()
all_tracks_data = []
for path in folder_paths:
    starting_id, tracks_data = process_folder(path, starting_id)
    all_tracks_data.extend(tracks_data)
print("Inserting data into the database...")



for track_data in all_tracks_data:
    insert_into_db(track_data)  # Store in MySQL
    # Call this function after processing tracks
    upload_to_github(OUTPUT_FILE)
    
    
print("Music metadata successfully saved to text file, database, and Github.")




    
print(f"Music metadata successfully saved to {OUTPUT_FILE} and database.")
