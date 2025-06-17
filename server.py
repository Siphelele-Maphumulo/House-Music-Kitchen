from flask import Flask, jsonify, render_template, request, send_from_directory
import os
import json
from werkzeug.utils import secure_filename

app = Flask(__name__)

# File path for music list
MUSIC_LIST_FILE = 'Exclusive_Music_List.txt'

# Image upload config
ALLOWED_EXTENSIONS = {'png', 'jpg', 'jpeg', 'gif'}

# Folder where uploaded images are stored
IMAGE_FOLDER = 'img'
os.makedirs(IMAGE_FOLDER, exist_ok=True)

app.config['IMAGE_FOLDER'] = IMAGE_FOLDER

# -------------------
# Helper Functions
# -------------------

def read_music_list():
    try:
        if not os.path.exists(MUSIC_LIST_FILE):
            return []
        with open(MUSIC_LIST_FILE, 'r', encoding='utf-8') as file:
            content = file.read()
            if not content.strip():
                return []
            return json.loads(content)
    except (json.JSONDecodeError, Exception) as e:
        print(f"Error reading music list: {e}")
        return []

def write_music_list(music_list):
    try:
        with open(MUSIC_LIST_FILE, 'w', encoding='utf-8') as file:
            json.dump(music_list, file, indent=4, ensure_ascii=False)
        return True
    except Exception as e:
        print(f"Error writing music list: {e}")
        return False

def allowed_file(filename):
    return '.' in filename and filename.rsplit('.', 1)[1].lower() in ALLOWED_EXTENSIONS

# -------------------
# Routes
# -------------------

@app.route('/edit-music-list')
def edit_music_list():
    music_data = read_music_list()
    return render_template('edit_file.html', music_data=music_data)

@app.route('/update-music/<int:id>', methods=['POST'])
def update_music(id):
    updated_data = request.get_json()
    music_list = read_music_list()

    found = False
    for music in music_list:
        if music.get("id") == id:
            music.update(updated_data)
            found = True
            break

    if not found:
        return jsonify({"success": False, "error": "Music entry not found"})

    if write_music_list(music_list):
        return jsonify({"success": True})
    else:
        return jsonify({"success": False, "error": "Failed to write file"})

@app.route('/delete-music/<int:id>', methods=['DELETE'])
def delete_music(id):
    music_list = read_music_list()
    updated_list = [music for music in music_list if music.get("id") != id]

    if write_music_list(updated_list):
        return jsonify({"success": True})
    else:
        return jsonify({"success": False, "error": "Failed to write file"})


@app.route('/delete-multiple-music', methods=['POST'])
def delete_multiple_music():
    try:
        # Get the list of IDs to delete
        ids_to_delete = request.json.get('ids', [])
        if not ids_to_delete:
            return jsonify({"success": False, "error": "No IDs provided"}), 400

        # Read current music list
        music_list = read_music_list()
        if not music_list:
            return jsonify({"success": False, "error": "No music list found"}), 404

        # Filter out the tracks to delete
        updated_list = []
        deleted_count = 0
        
        for music in music_list:
            if music.get("id") not in ids_to_delete:
                updated_list.append(music)
            else:
                deleted_count += 1
                # Delete associated files if they exist
                for file_type in ['image', 'audio']:
                    file_path = music.get(file_type, "")
                    if file_path:
                        full_path = os.path.join(app.root_path, file_path)
                        if os.path.exists(full_path):
                            try:
                                os.remove(full_path)
                            except Exception as e:
                                print(f"Error deleting {file_type} file: {e}")

        # Write the updated list back to the text file
        if not write_music_list(updated_list):
            return jsonify({"success": False, "error": "Failed to update music file"}), 500

        return jsonify({
            "success": True,
            "message": f"Deleted {deleted_count} tracks",
            "remaining": len(updated_list)
        })

    except Exception as e:
        return jsonify({"success": False, "error": str(e)}), 500

@app.route('/update-music-image/<int:id>', methods=['POST'])
def update_music_image(id):
    if 'image' not in request.files:
        return jsonify({"success": False, "error": "No image file part"})

    file = request.files['image']
    if file.filename == '':
        return jsonify({"success": False, "error": "No selected file"})

    if not allowed_file(file.filename):
        return jsonify({"success": False, "error": "Invalid file type"})

    music_list = read_music_list()
    music_entry = next((m for m in music_list if m.get("id") == id), None)

    if not music_entry:
        return jsonify({"success": False, "error": "Music entry not found"})

    # Preserve original filename (with spaces)
    original_filename = file.filename
    filename = secure_filename(original_filename)

    # Ensure spaces stay instead of being replaced by underscores
    filename = filename.replace('_', ' ')

    # Save to img folder
    filepath = os.path.join(app.config['IMAGE_FOLDER'], filename)
    file.save(filepath)

    # Update JSON with new image path
    music_entry['image'] = f"img/{filename}"

    if write_music_list(music_list):
        return jsonify({
            "success": True,
            "newImageUrl": music_entry['image']
        })
    else:
        return jsonify({"success": False, "error": "Failed to update image path"})

@app.route('/img/<filename>')
def serve_uploaded_file(filename):
    return send_from_directory(app.config['IMAGE_FOLDER'], filename)

# -------------------
# Run Server
# -------------------
if __name__ == '__main__':
    app.run(debug=True)