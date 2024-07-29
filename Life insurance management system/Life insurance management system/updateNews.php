<?php
include 'config.php';
if(isset($_POST['update_news'])){
    $update_NID = $_POST['newsId'];
    $update_title = $_POST['title'];
    $update_content = $_POST['content'];
    $update_description = $_POST['description'];

    mysqli_query($conn, "UPDATE `news` SET title = '$update_title', content = '$update_content', description ='$update_description'  WHERE NID = '$update_NID'") or die('query failed');

    $update_image = $_FILES['new_image']['name'];
    $update_image_tmp_name = $_FILES['new_image']['tmp_name'];
    $update_image_size = $_FILES['new_image']['size'];
    $update_folder = 'uploaded_images/'.$update_image;
    $update_old_image = $_POST['update_old_image'];

    if(!empty($update_image)){
        if($update_image_size > 2000000){
            $message[] = 'Image file size is too large';
        }else{
            move_uploaded_file($update_image_tmp_name, $update_folder);
            mysqli_query($conn, "UPDATE `news` SET image = '$update_image' WHERE NID = '$update_NID'") or die('query failed');
            unlink('uploaded_images/'.$update_old_image);
        }
    }

    header('location: admin-ManageNews.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update News</title>
    <link rel="stylesheet" href="updateNews.css">
</head>
<body>
    <h1>Update News</h1>
    <?php
    include 'config.php';
    $newsId = $_GET['update'];
    $select_news = mysqli_query($conn, "SELECT * FROM `news` WHERE NID='$newsId'") or die('query failed');
    if(mysqli_num_rows($select_news) > 0){
        while($fetch_update = mysqli_fetch_assoc($select_news)){
?>
<div class="update-form">
    <form id="updateForm" action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="newsId" value="<?php echo $fetch_update['NID']; ?>">
        <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
        <img src="uploaded_images/<?php echo $fetch_update['image']; ?>" alt="">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo $fetch_update['title']; ?>" required >
      
        <label for="content">Content:</label>
        <textarea id="content" name="content" required><?php echo $fetch_update['content']; ?></textarea>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?php echo $fetch_update['description']; ?></textarea>

        <label for="new_image">New Image:</label>
        <input type="file" id="new_image" name="new_image" accept="image/*">
      
        <button type="submit" name="update_news">Update</button>
    </form>
</div>
<?php
        }
    } else {
        echo '<script>document.querySelector(".update-form").style.display = "none";</script>';
    }
?>
</body>
</html>
