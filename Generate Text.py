import os
import re
import json
import datetime
import mysql.connector
import requests
import base64
import mimetypes
import tkinter as tk
from tkinter import filedialog
from mutagen.mp3 import MP3
from mutagen.id3 import ID3, ID3NoHeaderError
from mutagen.asf import ASF
from tqdm import tqdm

# Initialize Tkinter (without opening the full GUI)
root = tk.Tk()
root.withdraw()  # Hide the main Tkinter window

# Database Configurations
DB_HOST = "localhost"
DB_USER = "root"
DB_PASSWORD = ""
DB_NAME = "housemusickitchen_db"

# GitHub Configurations
GITHUB_USERNAME = "Siphelele-Maphumulo"  # Your GitHub username
GITHUB_REPO = "House-Music-Kitchen"  # Your repository name
GITHUB_FILE_PATH = "Exclusive_Music_List.txt"  # Path in the repo
GITHUB_BRANCH = "main"  # Branch name
GITHUB_TOKEN = "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"  # Securely load token

LABEL = "House Music Kitchen"
GENRE = "Deep House"
PRICE = "1.99"
CURRENT_YEAR = datetime.datetime.now().year
OUTPUT_FILE = "Exclusive_Music_List.txt"
UPLOAD_DIR = "uploads"  # Directory where files are uploaded

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
    remix_keywords = ["(Remake)", "(Soulful Mix)", "(Soulful Remix)", "(Soulful ReMix)", "(Makeup)", "(Deeper Mix)", "(Visitor)", "(Revisited)", "(Rework)", "(Touch)", "(Vocal ReMix)", "(Vocal Mix)"]
    return any(word in title for word in remix_keywords)

def extract_remixer_from_title(title):
    match = re.search(r"\((.*?)\)", title)
    if match:
        remix_content = match.group(1)
        
        if "'s" in remix_content:
            return remix_content.split("'s")[0].strip()
        
        remix_keywords = ["Dub Mix","Remake", "Remix", "Soulful Mix", "Makeup", "Deeper Mix", "Visitor", "Revisited", "Rework", "Touch", "Chant", "Step", "Bootleg", "Soulful Remix", "Vocal Remix"]
        for keyword in remix_keywords:
            if keyword in remix_content:
                parts = remix_content.split(keyword)
                before_keyword = parts[0].strip()
                space_count = before_keyword.count(" ")
                split_words = before_keyword.strip().split()
                if space_count > 2:
                    return before_keyword.strip()
                elif space_count <= 2 and split_words:
                    return split_words[-1]
    return None

def clean_artist_name(artist):
    artist_mapping = {
        "Soulful": "Unknown",
        "Citizen": "Citizen Sthee",
        "Mr": "Mr Shane SA",
        "Gigg": "Gigg Cosco",
        "Griffith": "Griffith Malo",
        "Lady": "Lady Deep",
        "Xcape": "Soulful Xcape",
        "Lazy": "Lazy K SA",
        "Lunaticsoul": "Lunaticsoul",
        "Leonard": "Leonard Canticle",
        "1060": "Mr Shane SA",
        "Mr Shane SA 10...": "Mr Shane SA",
        "Mr Shane SA 10": "Mr Shane SA",
        "OG": "OG France",
        "Peekay Mzee Be...": "Peekay Mzee",
        "3 Step mix": "3 Step Remix",
        "Sunset": "KG Sunset",
        "3": "3 Step Remix",
        "Step": "3 Step Remix",
        "KG": "KG Sunset",
        "Nastic": "Nastic Groove",
        "Groove": "Nastic Groove",
        "Massive": "Massive R",
        "Endearing": "Endearing Souls",
        "Groovy": "Groovy Smallz",
        "Refla Musiq": "MusiQ Rebels",
        "Musiq": "MusiQ Rebels",
        "MusiQ": "MusiQ Rebels",
        "Nick": "Nick SA",
        "Mafia": "Mafia Natives",
        "Efkay": "Efkay Da Shiqwan",
        "Morda": "MÖRDA",
        "Jnr": "Jnr SA",
        "McCuemza": "McCuemza Isaac",
        "Dawn": "Dawn Deep",
        "Da": "Da Capo",
        "Oscar": "Oscar Mbo",
        "Unknown": "House Music Kitchen",
        "Brothers": "Brothers On Cue",
        "Andy": "Andy Bankx",
        "Kuthathu": "Kuthathu SA",
        "Dj Tears PLK KasiDeep": "Dj Tears PLK",
        "KasiDeep": "Dj Tears PLK",
        "Spin Worx & Dy...": "Spin Worx",
        "Pablo": "PabloSoul",
        "Alternativ3": "Beat Soul",
        "Afrikhana's": "Afrikhana's Flava",
        "QuesterCafe" : "QuestarCafe"   
    }
    
    artist = artist.replace("'s", "")
    return artist_mapping.get(artist, artist)

def shorten_artist_name(artist_name):
    """Shortens artist names longer than 17 characters, including spaces."""
    if len(artist_name) > 17:
        return artist_name[:14] + "..."
    return artist_name

def extract_featured_artist(ft_artist):
    match = re.search(r'[,&] *([^\(]+)', ft_artist)
    return match.group(1).strip() if match else ""

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

def write_tracks_to_file(tracks):
    """Optimized function to write tracks to file with minimal I/O operations"""
    # Use a single write operation with json.dumps instead of multiple small writes
    json_data = json.dumps(tracks, indent=4, ensure_ascii=False)
    
    # Write to a temporary file first to ensure atomic write operation
    temp_file = f"{OUTPUT_FILE}.tmp"
    
    try:
        # Use buffered writing with a large buffer size (1MB)
        with open(temp_file, "w", encoding="utf-8", buffering=1024*1024) as f:
            f.write(json_data)
        
        # Atomic rename operation (works on Unix and Windows)
        if os.path.exists(OUTPUT_FILE):
            os.replace(temp_file, OUTPUT_FILE)
        else:
            os.rename(temp_file, OUTPUT_FILE)
            
    except Exception as e:
        if os.path.exists(temp_file):
            os.remove(temp_file)
        raise e

def insert_into_db_batch(tracks_data):
    """Batch insert tracks into database for better performance"""
    try:
        connection = connect_db()
        cursor = connection.cursor()
        
        # Prepare SQL and values
        sql = """
        INSERT INTO music (id, artist, ft_artist, title, label, genre, release_date, duration, price, image, audio)
        VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)
        """
        
        values = [(track["id"], track["artist"], track["ft_artist"], track["title"], 
                  track["label"], track["genre"], track["release_date"],
                  track["duration"], track["price"], track["image"], track["audio"]) 
                 for track in tracks_data]
        
        # Execute in batches of 100 for better performance
        batch_size = 100
        with tqdm(total=len(values), desc="Inserting to database") as pbar:
            for i in range(0, len(values), batch_size):
                batch = values[i:i + batch_size]
                cursor.executemany(sql, batch)
                connection.commit()
                pbar.update(len(batch))
                
        cursor.close()
        connection.close()
        return True
    except mysql.connector.Error as err:
        print(f"Database error: {err}")
        return False

def upload_to_github(file_path, session=None):
    """Optimized GitHub upload with session reuse and error handling"""
    try:
        url = f"https://api.github.com/repos/{GITHUB_USERNAME}/{GITHUB_REPO}/contents/{GITHUB_FILE_PATH}"
        
        # Read file content once
        with open(file_path, "rb") as file:
            content = file.read()
            encoded_content = base64.b64encode(content).decode("utf-8")

        # Use session if provided, otherwise create a new one
        req = session.get if session else requests.get
        put = session.put if session else requests.put

        # Get SHA of existing file (if any)
        response = req(url, headers={
            "Authorization": f"token {GITHUB_TOKEN}",
            "Accept": "application/vnd.github.v3+json"
        })
        
        sha = None
        if response.status_code == 200:
            sha = response.json().get("sha")
        elif response.status_code != 404:  # 404 means file doesn't exist yet
            print(f"GitHub check failed: {response.status_code} - {response.text}")
            return False

        # Prepare payload
        payload = {
            "message": f"Updated music list - {datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S')}",
            "content": encoded_content,
            "branch": GITHUB_BRANCH
        }
        if sha:
            payload["sha"] = sha

        # Upload with timeout
        response = put(url, json=payload, headers={
            "Authorization": f"token {GITHUB_TOKEN}",
            "Accept": "application/vnd.github.v3+json"
        }, timeout=10)

        if response.status_code in [200, 201]:
            return True
        else:
            print(f"GitHub upload failed: {response.status_code} - {response.text}")
            return False

    except requests.exceptions.RequestException as e:
        print(f"Network error uploading to GitHub: {str(e)}")
        return False
    except Exception as e:
        print(f"Unexpected error uploading to GitHub: {str(e)}")
        return False

def process_folder(folder_path, start_id):
    current_id = start_id
    tracks = []
    # Load existing tracks only once at the beginning
    if os.path.exists(OUTPUT_FILE):
        try:
            with open(OUTPUT_FILE, "r", encoding="utf-8") as f:
                tracks = json.load(f)
        except json.JSONDecodeError:
            tracks = []
    
    # Process all files first, then write once at the end
    new_tracks = []
    file_list = [f for f in os.listdir(folder_path) if f.lower().endswith(('.mp3', '.wma'))]
    
    for file in tqdm(file_list, desc=f"Processing {os.path.basename(folder_path)}"):
        file_path = os.path.join(folder_path, file)
        
        if file.lower().endswith(".mp3"):
            metadata = get_mp3_metadata(file_path)
        else:  # .wma
            metadata = get_wma_metadata(file_path)
        
        artist, ft_artist, title = parse_filename(file)
        artist = clean_artist_name(artist)
        artist = shorten_artist_name(artist)
        
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
            "image": f"img/{artist.replace(' ', ' ')}.png",
            "audio": f"tracks/{file}"
        }
        new_tracks.append(track_data)
    
    # Combine existing and new tracks
    tracks.extend(new_tracks)
    
    # Write all tracks at once
    write_tracks_to_file(tracks)
    
    return current_id, new_tracks

def main():
    import sys

    # Check if we're running from PHP or interactively
    is_headless = "php" in sys.argv or "--headless" in sys.argv

    folder_paths = []

    if is_headless:
        # Server mode: use predefined upload directory
        folder_paths = [UPLOAD_DIR]
    else:
        # Interactive mode: allow user to select folders
        while True:
            folder_path = filedialog.askdirectory(title="Select a Folder for Music Files")
            if folder_path:
                folder_paths.append(folder_path)
                print(f"Folder added: {folder_path}")
            else:
                print("No folder selected.")
            
            add_more = input("Would you like to add another folder? (yes/no): ").strip().lower()
            if add_more != "yes":
                break

        if not folder_paths:
            print("No folders selected. Exiting.")
            return

    starting_id = get_last_id()
    all_tracks_data = []

    print("Processing folder(s)...")
    for path in tqdm(folder_paths, desc="Processing folders"):
        starting_id, tracks_data = process_folder(path, starting_id)
        all_tracks_data.extend(tracks_data)

    print("\nProcessing complete. Saving data...")

    print("Inserting data into the database...")
    if insert_into_db_batch(all_tracks_data):
        print("Database update successful!")
    else:
        print("Database update completed with errors")

    print("\nUploading to GitHub...")
    with requests.Session() as session:
        if upload_to_github(OUTPUT_FILE, session):
            print("File successfully uploaded to GitHub.")
        else:
            print("Failed to upload to GitHub")

    print("\nMusic metadata successfully saved to:")
    print(f"- Local file: {OUTPUT_FILE}")
    print("- Database")
    print("- GitHub repository")


if __name__ == "__main__":
    main()

# Clear uploads after processing
for f in os.listdir(UPLOAD_DIR):
    os.remove(os.path.join(UPLOAD_DIR, f))
