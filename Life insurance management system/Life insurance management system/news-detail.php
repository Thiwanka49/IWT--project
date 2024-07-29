<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News Detail</title>
  <link rel="stylesheet" href="news-detail.css">
  <link rel="stylesheet" href="indexStyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<?php include 'userHeader.php'; ?>

  <section class="news-detail-container">
    <div class="news-details">
      <?php
      include 'config.php';

      // Check if the news ID is provided in the URL
      if (isset($_GET['NID'])) {
          $newsId = $_GET['NID'];
          $select_news = mysqli_query($conn, "SELECT * FROM `news` WHERE NID = $newsId") or die('Query failed');

          if (mysqli_num_rows($select_news) > 0) {
              $news = mysqli_fetch_assoc($select_news);
              ?>
              <div class="image-container">
                 <img src="uploaded_images/<?php echo $news['image']; ?>" alt="News Image" class="news-detail-image" >
              </div>
              <div class="details">
                <h2 class="news-detail-title"><?php echo $news['title']; ?></h2>
                <h3 class="news-detail-description"><?php echo $news['description']; ?></h3>
              </div>
          <?php
          } else {
              echo '<p class="empty">News not found!</p>';
          }
      } else {
          echo '<p class="empty">Invalid news ID!</p>';
      }
      ?>
    </div>
  </section>

<footer>
  <div class="footer-content">
    <div class="footer-section about">
      <h2>About Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <div class="contact">
        <span><i class="fa fa-phone"></i> 123-456-789</span>
        <span><i class="fa fa-envelope"></i> info@example.com</span>
      </div>
      <div class="social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
      </div>
    </div>
    <div class="footer-section links">
      <h2>Quick Links</h2>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
    </div>
    <div class="footer-section common-section">
      <h2>Common Section</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut venenatis luctus nisl, in pulvinar urna. Nunc malesuada magna sit amet augue rhoncus, eget auctor ipsum maximus. Phasellus efficitur tincidunt turpis, id pellentesque purus aliquet id.</p>
      <p>Proin interdum lectus nec felis faucibus, sit amet iaculis dui luctus. Aliquam ac mauris non mauris posuere cursus a in neque. Aliquam consectetur ligula sed sapien cursus, vitae ullamcorper purus placerat.</p>
    </div>
  </div>
  <div class="footer-bottom">
    &copy; 2023 Life Insurance System | Designed by Your Name
  </div>
</footer>

  <script src="script.js"></script>
</body>
</html>
