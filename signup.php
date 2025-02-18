<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "housemusickitchen_db";
$port = 3306; // Your MySQL port number

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];

// Check if email already exists
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);


    // Insert data into database
$sql = "INSERT INTO users (firstname, lastname, email, phone, password)
VALUES ('$firstname', '$lastname', '$email', '$phone', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    // Wait for 3 seconds
    sleep(4);
    // Redirect to login page
    header("Location: index.php");
    exit(); // Make sure nothing else gets executed after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

