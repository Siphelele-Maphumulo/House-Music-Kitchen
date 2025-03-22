
from flask import Flask, jsonify, render_template, request
import subprocess
import os
import sys
import json  # Missing import for JSON handling

app = Flask(__name__)

# Route for running the Python script (Generate Text.py)
@app.route('/run-python', methods=['GET'])
def run_python():
    try:
        # Get the full path of the script
        script_path = os.path.abspath("Generate Text.py")

        # Open IDLE and run the script automatically
        subprocess.run([sys.executable, "-m", "idlelib", "-r", script_path], check=True)

        return jsonify({"message": "Python script opened and executed in IDLE successfully!"})
    except subprocess.CalledProcessError as e:
        return jsonify({"error": str(e)})

# Path to the music list file
MUSIC_LIST_FILE = 'Exclusive_Music_List.txt'

# Helper function to read the music list from the file
def read_music_list():
    try:
        with open(MUSIC_LIST_FILE, 'r') as file:
            return json.load(file)
    except Exception as e:
        return {"success": False, "error": str(e)}

# Helper function to write the music list back to the file
def write_music_list(music_list):
    try:
        with open(MUSIC_LIST_FILE, 'w') as file:
            json.dump(music_list, file, indent=4)
    except Exception as e:
        return {"success": False, "error": str(e)}

# Route to display and edit the Exclusive_Music_List.txt
@app.route('/edit-file', methods=['GET', 'POST'])
def edit_music_file():
    if request.method == 'POST':
        updated_content = request.form['content']
        try:
            # Update the file with the new content
            with open(MUSIC_LIST_FILE, 'w') as file:
                file.write(updated_content)
            return jsonify({"message": "File updated successfully!"})
        except Exception as e:
            return jsonify({"error": f"Failed to update file: {str(e)}"})

    else:
        try:
            music_data = read_music_list()  # Read the data from the file
            return render_template('edit_file.html', music_data=music_data)
        except Exception as e:
            return jsonify({"error": f"Failed to read file: {str(e)}"})

# Route to update a music entry by ID
@app.route('/update-music/<int:id>', methods=['POST'])
def update_music(id):
    try:
        updated_data = request.get_json()
        music_list = read_music_list()

        for music in music_list:
            if music['id'] == id:
                music.update(updated_data)
                write_music_list(music_list)
                return jsonify({"success": True})

        return jsonify({"success": False, "error": "Music entry not found"})

    except Exception as e:
        return jsonify({"success": False, "error": str(e)})

# Route to delete a music entry by ID
@app.route('/delete-music/<int:id>', methods=['DELETE'])
def delete_music(id):
    try:
        music_list = read_music_list()
        music_list = [music for music in music_list if music['id'] != id]

        write_music_list(music_list)

        return jsonify({"success": True})

    except Exception as e:
        return jsonify({"success": False, "error": str(e)})

if __name__ == '__main__':
    app.run(debug=True)

from flask import Flask, jsonify, render_template, request
import subprocess
import os
import sys
import json  # Missing import for JSON handling

app = Flask(__name__)

# Route for running the Python script (Generate Text.py)
@app.route('/run-python', methods=['GET'])
def run_python():
    try:
        # Get the full path of the script
        script_path = os.path.abspath("Generate Text.py")

        # Open IDLE and run the script automatically
        subprocess.run([sys.executable, "-m", "idlelib", "-r", script_path], check=True)

        return jsonify({"message": "Python script opened and executed in IDLE successfully!"})
    except subprocess.CalledProcessError as e:
        return jsonify({"error": str(e)})

# Path to the music list file
MUSIC_LIST_FILE = 'Exclusive_Music_List.txt'

# Helper function to read the music list from the file
def read_music_list():
    try:
        with open(MUSIC_LIST_FILE, 'r') as file:
            return json.load(file)
    except Exception as e:
        return {"success": False, "error": str(e)}

# Helper function to write the music list back to the file
def write_music_list(music_list):
    try:
        with open(MUSIC_LIST_FILE, 'w') as file:
            json.dump(music_list, file, indent=4)
    except Exception as e:
        return {"success": False, "error": str(e)}

# Route to display and edit the Exclusive_Music_List.txt
@app.route('/edit-file', methods=['GET', 'POST'])
def edit_music_file():
    if request.method == 'POST':
        updated_content = request.form['content']
        try:
            # Update the file with the new content
            with open(MUSIC_LIST_FILE, 'w') as file:
                file.write(updated_content)
            return jsonify({"message": "File updated successfully!"})
        except Exception as e:
            return jsonify({"error": f"Failed to update file: {str(e)}"})

    else:
        try:
            music_data = read_music_list()  # Read the data from the file
            return render_template('edit_file.html', music_data=music_data)
        except Exception as e:
            return jsonify({"error": f"Failed to read file: {str(e)}"})

# Route to update a music entry by ID
@app.route('/update-music/<int:id>', methods=['POST'])
def update_music(id):
    try:
        updated_data = request.get_json()
        music_list = read_music_list()

        for music in music_list:
            if music['id'] == id:
                music.update(updated_data)
                write_music_list(music_list)
                return jsonify({"success": True})

        return jsonify({"success": False, "error": "Music entry not found"})

    except Exception as e:
        return jsonify({"success": False, "error": str(e)})

# Route to delete a music entry by ID
@app.route('/delete-music/<int:id>', methods=['DELETE'])
def delete_music(id):
    try:
        music_list = read_music_list()
        music_list = [music for music in music_list if music['id'] != id]

        write_music_list(music_list)

        return jsonify({"success": True})

    except Exception as e:
        return jsonify({"success": False, "error": str(e)})

if __name__ == '__main__':
    app.run(debug=True)
