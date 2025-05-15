<?php
include("db_connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the current date for attendance
    $attendance_date = date("Y-m-d");

    // Loop through all the students' attendance data
    foreach ($_POST['attendance'] as $student_id => $status) {
        // Insert the attendance into the database
        $sql = "INSERT INTO attendance (student_id, date, status) 
                VALUES ('$student_id', '$attendance_date', '$status')";

        if ($conn->query($sql) === TRUE) {
            echo "Attendance recorded for student ID: $student_id<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    echo "Attendance has been recorded successfully!";
}
?>
