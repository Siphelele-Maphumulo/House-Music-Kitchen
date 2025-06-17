# 🎵 House Music Web Platform

Welcome to the **House Music Web Application**, a platform designed for music lovers, DJs, and event organizers to share, upload, and explore exclusive house tracks. Built with a modern full-stack approach, this project is focused on community engagement and seamless file sharing.

## 🚀 Features

- 🎧 **Exclusive Music Uploads**  
  Artists and DJs can upload their house tracks securely. Supported formats include `.mp3`, `.wav`, and more.

- 📁 **Folder Upload Support**  
  Users can upload entire folders of music, and the system handles file management and naming securely using `secure_filename`.

- 📊 **Analytics Dashboard**  
  Track engagement with your uploads using the integrated analytics section.

- 🖼️ **Artwork and Image Uploads**  
  Upload album artwork or event posters in `.jpg`, `.png`, or `.gif` format, stored safely in the `static/uploads` directory.

- 🔐 **User Roles & Access Control**  
  Admin and standard user access with session-based authentication.

- 💬 **Contact & Guestbook System** *(Upcoming Feature)*  
  Let fans or clients leave messages directly on the site.

## 🛠️ Tech Stack

- **Frontend:** HTML, CSS, Bootstrap (v5)
- **Backend:** Python (Flask)
- **Database:** Flat file (for music list) + JSON for metadata *(can be upgraded to SQL/NoSQL)*
- **Deployment:** Runs locally via Flask's development server

## 📁 Project Structure

House-Music/
│
├── app.py # Main Flask app
├── static/uploads/ # Image and music uploads
├── templates/ # HTML files
├── Exclusive_Music_List.txt # Stores list of uploaded tracks
└── README.md

## ⚙️ Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/house-music-web.git
   cd house-music-web
Install dependencies:

bash
Copy
Edit
pip install Flask werkzeug
Run the app:


python app.py
Open your browser at:
http://localhost:5000 or something

🌟 Highlights
Designed for DJs by a DJ 🎚️

Focused on simplicity and performance

Encourages community sharing and creativity

🙌 Contributing
Feel free to fork, suggest features, or report bugs via issues. Contributions are welcome!

📫 Contact
For feedback or collaboration:
📧 Siphelelemaphumulo@gmail.com

Let me know if you’d like to add:
- Your **live demo** link (if hosted)
- A **GIF/video preview** of the UI
- Instructions on **how to use the upload or analytics features**

I can generate any of that for you!











