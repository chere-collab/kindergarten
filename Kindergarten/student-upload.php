<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Upload Student Documents | Little Bloom Kindergarten</title>
  <link rel="stylesheet" href="style_student_upload.css" />
</head>
<body>

  <header>
    <div class="container">
      <h1>Upload Student Documents</h1>
      <nav>
        <a href="dashboard-teacher.html">Dashboard</a>
        <a href="attendance.html">Attendance</a>
        <a href="assessment.html">Assessments</a>
        <a href="student-upload.html">Upload</a>
        <a href="index.html">Logout</a>
      </nav>
    </div>
  </header>

  <section class="upload-section">
    <div class="container">
      <h2>Upload Files for Student Records</h2>

      <form enctype="multipart/form-data">
        <div class="form-group">
          <label for="student-name">Select Student:</label>
          <select id="student-name" name="student-name">
            <option value="">-- Choose Student --</option>
            <option value="abel">Abel Tesfaye</option>
            <option value="liya">Liya Meles</option>
            <!-- More students added dynamically in PHP later -->
          </select>
        </div>

        <div class="form-group">
          <label for="file-title">Document Title:</label>
          <input type="text" id="file-title" name="file-title" placeholder="e.g., Birth Certificate" />
        </div>

        <div class="form-group">
          <label for="upload-file">Choose File:</label>
          <input type="file" id="upload-file" name="upload-file" />
        </div>

        <div class="upload-submit">
          <button type="submit">Upload Document</button>
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
