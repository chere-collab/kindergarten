<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Registration | Little Bloom Kindergarten</title>
  <link rel="stylesheet" href="style_regitration.css" />
</head>
<body>

  <header>
    <div class="container">
      <h1>Little Bloom Kindergarten</h1>
      <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="registration.html">Enroll</a>
        <a href="contact.html">Contact</a>
        <a href="login.html">Login</a>
      </nav>
    </div>
  </header>

  <section class="registration-form">
    <div class="container">
      <h2>Student Registration</h2>
      <form action="/registration.php" method="POST">
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name" required placeholder="Enter your child's full name" />
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name" required placeholder="Enter your child's full name" />
        </div>
        <div class="form-group">
          <label for="date_of_birth">Date of Birth</label>
          <input type="date" id="date_of_birth" name="date_of_birth" required />
        </div>
        <div class="form-group">
          <label for="parent_name">Parent/Guardian Name</label>
          <input type="text" id="parent_name" name="parent_name" required placeholder="Enter parent's name" />
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <input type="text" id="gender" name="gender" required placeholder="Enter parent's name" />
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" required placeholder="Enter email address" />
        </div>
        <div class="form-group">
          <label for="contact_number">contact_number Number</label>
          <input type="tel" id="contact_number" name="contact_number" required placeholder="Enter phone number" />
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea id="address" name="address" required placeholder="Enter your address"></textarea>
        </div>
        <button type="submit">Register</button>
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
