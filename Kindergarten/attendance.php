<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Attendance | Little Bloom Kindergarten</title>
  <link rel="stylesheet" href="style_attendance.css" />
</head>
<body>

  <header>
    <div class="container">
      <h1>Attendance Management</h1>
      <nav>
        <a href="dashboard-teacher.html">Dashboard</a>
        <a href="attendance.html">Attendance</a>
        <a href="assessment.html">Assessments</a>
        <a href="index.html">Logout</a>
      </nav>
    </div>
  </header>

  <section class="attendance-section">
    <div class="container">
      <h2>Mark Attendance</h2>

      <form action="insert_attendance.php" method="POST">

        <div class="attendance-table">
          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Present</th>
                <th>Absent</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // Fetch student data from the database
                include("db_connection.php");
                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);
                
                // Loop through students and create rows
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $student_id = $row['id'];
                        $student_name = $row['name'];
                        echo "
                          <tr>
                            <td>$student_id</td>
                            <td>$student_name</td>
                            <td><input type='radio' name='attendance[$student_id]' value='present' /></td>
                            <td><input type='radio' name='attendance[$student_id]' value='absent' /></td>
                          </tr>
                        ";
                    }
                } else {
                    echo "<tr><td colspan='4'>No students found</td></tr>";
                }
              ?>
            </tbody>
          </table>
        </div>

        <div class="attendance-submit">
          <button type="submit">Save Attendance</button>
        </div>
      </form>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2025 Little Bloom Kindergarten. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
