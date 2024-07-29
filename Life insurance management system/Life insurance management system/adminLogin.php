<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select_admin = mysqli_query($conn, "SELECT * FROM `admin` WHERE adminEmail = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_admin) > 0){

      $row = mysqli_fetch_assoc($select_admin);
         $_SESSION['admin_email'] = $row['adminEmail'];
         $_SESSION['admin_id'] = $row['aid'];
         header('location:adminAddNews.php');

      }

   }else{
      $message[] = 'incorrect email or password!';
   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="userLogin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
</head>
<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <div class="form-box">
        <form action="" method="post">
            <h3>login now</h3>
            <input type="email" name="email" placeholder="enter your email" required class="box">
            <input type="password" name="password" placeholder="enter your password" required class="box">
            <input type="submit" name="submit" value="login now" class="btn">
        </form>
    </div>
  </div>
</body>
</html>
