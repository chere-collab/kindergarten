<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "kiddes_db");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get form data
$student_name = $_POST['student_name'];
$date = $_POST['date'];
$status = $_POST['status'];

// Insert into database
$sql = "INSERT INTO attendance (student_name, date, status) 
        VALUES ('$student_name', '$date', '$status')";

if ($conn->query($sql) === TRUE) {
  echo "Attendance recorded successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
