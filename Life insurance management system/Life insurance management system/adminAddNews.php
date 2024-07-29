<?php

include 'config.php';

if(isset($_POST['add_news'])){
  $Title = mysqli_real_escape_string($conn, $_POST['title']);
  $Content = $_POST['content'];
  $Description = $_POST['description'];
  $image = $_FILES['image']['name'];
  $image_size = $_FILES['image']['size'];
  $image_tmp_name = $_FILES['image']['tmp_name'];
  $image_folder = 'uploaded_images/'.$image;
  


  $select_news_name = mysqli_query($conn, "SELECT title FROM `news` WHERE title = '$Title'") or die('query failed');

  if(mysqli_num_rows($select_news_name) > 0){
      $message[] = 'News Title already added';
  }else{
      $add_news_query = mysqli_query($conn, "INSERT INTO `news`(	title, content,description, image) VALUES('$Title', '$Content', '$Description','$image')") or die('query failed');

      if($add_news_query){
          if($image_size > 2000000){
              $message[] = 'Image size is too large';
          }else{
              move_uploaded_file($image_tmp_name, $image_folder);
              $message[] = 'Book added successfully!';
          }
      }else{
          $message[] = 'Book could not be added!';
      }
  }
  header('location:admin-ManageNews.php');
}


?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="adminStyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-mCphXr/bcZzh9uCVqvsPYa0zqKl8SvZXsoh6SfHQtL+xHoWb8+X5tdMCBz6lOhgNLeKvYsVH5FeOD8frS5/sww==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="script.js"></script>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="adminAddNews.php">Add News</a></li>
        <li><a href="admin-ManageNews.php">Manage News</a></li>
        <li class="profile-icon"><a href="#"><i class="fas fa-user-circle"></i></a></li>
      </ul>
    </nav>


  </header>

  <div class="container">
    <h2>Add News</h2>
    <form action="" method="post" id="newsForm" enctype="multipart/form-data">
      <label for="title">Title:</label>
      <input type="text" id="title" name="title" required>

      <label for="content">Content (250 characters max):</label>
      <textarea id="content" name="content" maxlength="250" required></textarea>

      <label for="description">Full Description:</label>
      <textarea id="description" name="description" required></textarea>

      <label for="image">Image:</label>
      <input type="file" name="image" id="image" accept="image/jpg, image/jpeg, image/png"  required>

      <button type="submit" name="add_news">Add News</button>
    </form>

  </div>
  
  <footer>
    <p>&copy; 2023 Admin Footer</p>
    <!-- Add your footer content here -->
  </footer>
</body>
</html>
