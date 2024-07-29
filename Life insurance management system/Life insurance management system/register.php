<?php
   include 'config.php';
   if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user_sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    
    // Execute the SQL statement
    if (mysqli_query($conn, $user_sql)) {
      // Registration successful
      echo "Registration successful. You can now login.";
    } else {
      // Registration failed
      echo "Error: " . $user_sql . "<br>" . mysqli_error($conn);
    }
    
    // Close the database connection
    mysqli_close($conn);
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="register.css">
  <title>User Registration</title>

</head>
<body>
  <div class="container">
    <h2>User Registration</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
      </div>
      <button type="submit" name="register">Register</button>
    </form>
    <div class="login-link">
      <p>Already have an account? <a href="userlogin.php">Login</a></p>
    </div>
  </div>
</body>
</html>
