<?php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $parent_name = mysqli_real_escape_string($conn, $_POST['parent_name']);
    $contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    // Insert the data into the database
    $sql = "INSERT INTO students (first_name, last_name, date_of_birth, gender, parent_name, contact_number, email)
            VALUES ('$first_name', '$last_name', '$date_of_birth', '$gender', '$parent_name', '$contact_number', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New student registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
