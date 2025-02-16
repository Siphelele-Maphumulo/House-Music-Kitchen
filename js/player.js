// Get the modal
var modal = document.getElementById("musicPlayerModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Get the audio element and buttons
var audioPlayer = document.getElementById("audioPlayerModal");
var playPauseBtn = document.getElementById("playPauseBtn");
var stopBtn = document.getElementById("stopBtn");
var forwardBtn = document.getElementById("forwardBtn");

// Function to open the modal and play the audio
function openModal(trackSource) {
    // Set the audio source
    audioPlayer.src = trackSource;

    // Play the audio
    audioPlayer.play();
    playPauseBtn.textContent = "Pause"; // Initially set to pause

    // Display the modal
    modal.style.display = "block";
}

// Function to toggle play/pause
function togglePlayPause() {
    if (audioPlayer.paused) {
        audioPlayer.play();
        playPauseBtn.textContent = "Pause";
    } else {
        audioPlayer.pause();
        playPauseBtn.textContent = "Play";
    }
}

// Function to stop the audio
function stopAudio() {
    audioPlayer.pause();
    audioPlayer.currentTime = 0; // Rewind to the beginning
    playPauseBtn.textContent = "Play";
}

// Function to forward the audio
function forwardAudio() {
    audioPlayer.currentTime += 30; // Forward 30 seconds
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    stopAudio(); // Stop the audio when closing
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        stopAudio(); // Stop the audio when closing
        modal.style.display = "none";
    }
}

// Attach event listeners to the buttons
playPauseBtn.addEventListener('click', togglePlayPause);
stopBtn.addEventListener('click', stopAudio);
forwardBtn.addEventListener('click', forwardAudio);