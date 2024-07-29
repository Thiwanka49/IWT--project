<?php
    include 'config.php';
    if(isset($_GET['delete'])){
        $delete_id = $_GET['delete'];
        $delete_image_query = mysqli_query($conn, "SELECT image FROM `news` WHERE NID = '$delete_id'") or die('query failed');
        $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
        $image_file = 'uploaded_images/'.$fetch_delete_image['image'];
        unlink($image_file);
        mysqli_query($conn, "DELETE FROM `news` WHERE NID = '$delete_id'") or die('query failed');
        header('location:admin-ManageNews.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Manage News</title>
  <link rel="stylesheet" type="text/css" href="adminStyles.css">
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
  <h1>Manage News</h1>
<?php
    include 'config.php';
    $select_news = mysqli_query($conn, "SELECT * FROM `news`") or die('query failed');
    if(mysqli_num_rows($select_news) > 0){
        while($fetch_news = mysqli_fetch_assoc($select_news)){
?>
  <div class="news-container">
    <div class="news-item">
        <div class="img-box">
            <img src="uploaded_images/<?php echo $fetch_news['image']; ?>" alt="" style="width: 65%;">
        </div>
        <div class="news-Info">
            <h2><?php echo $fetch_news['title']; ?></h2>
            <h3>News Content</h3>
            <p><?php echo $fetch_news['content']; ?></p>
            <h3>News Description</h3>
            <p><?php echo $fetch_news['description']; ?></p>
            <div class="action-buttons">
                <a href="updateNews.php?update=<?php echo $fetch_news['NID']; ?>" class="option-btn"><button class="update-button" onclick="openPopup()">Update</button></a>
                <a href="admin-ManageNews.php?delete=<?php echo $fetch_news['NID']; ?>" onclick="return confirm('Delete this product?');"><button class="delete-button">Delete</button></a>
            </div>
        </div>
    </div>
    <!-- Add more news items here -->
  </div>
<?php
        }
    } else {
        echo '<p class="empty">No news added yet!</p>';
    }
?>


  <footer>
    <p>&copy; 2023 Admin Footer</p>
    <!-- Add your footer content here -->
  </footer>
</body>
</html>
