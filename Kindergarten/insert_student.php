<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP (no password)
$dbname = "kiddes_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$parent_name = $_POST['parent_name'];
$contact = $_POST['contact'];

// Insert data into database
$sql = "INSERT INTO students (name, age, gender, parent_name, contact)
VALUES ('$name', '$age', '$gender', '$parent_name', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "New student registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
