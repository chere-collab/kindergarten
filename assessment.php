<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Assessments | Little Bloom Kindergarten</title>
  <link rel="stylesheet" href="style_assessments.css" />
</head>
<body>

  <header>
    <div class="container">
      <h1>Student Assessments</h1>
      <nav>
        <a href="dashboard-teacher.html">Dashboard</a>
        <a href="attendance.html">Attendance</a>
        <a href="assessment.html">Assessments</a>
        <a href="index.html">Logout</a>
      </nav>
    </div>
  </header>

  <section class="assessment-section">
    <div class="container">
      <h2>Record Observations & Reports</h2>

      <form>
        <div class="form-group">
          <label for="student-name">Student Name:</label>
          <select id="student-name" name="student-name">
            <option value="">-- Select Student --</option>
            <option value="abel">Abel Tesfaye</option>
            <option value="liya">Liya Meles</option>
            <!-- Add more later dynamically -->
          </select>
        </div>

        <div class="form-group">
          <label for="category">Assessment Area:</label>
          <select id="category" name="category">
            <option value="">-- Select Area --</option>
            <option value="behavior">Behavior</option>
            <option value="academic">Academic</option>
            <option value="language">Language Skills</option>
            <option value="motor">Motor Skills</option>
          </select>
        </div>

        <div class="form-group">
          <label for="notes">Observation / Notes:</label>
          <textarea id="notes" name="notes" rows="5" placeholder="Write teacher's notes..."></textarea>
        </div>

        <div class="assessment-submit">
          <button type="submit">Save Assessment</button>
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
