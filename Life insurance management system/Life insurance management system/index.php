<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Life Insurance System</title>
  <link rel="stylesheet" href="indexStyle.css">
  <link rel="stylesheet" href="news.css">
</head>
<body>
    <?php include 'userHeader.php'; ?>

  <!-- Body -->
<!-- image slider(start) -->
    <div class="slid">
        <div id="slider">
            <figure>
                <img src="images/banner1.jpg">
                <img src="images/banner2.jpg">
                <img src="images/banner3.jpg">
                <img src="images/banner4.jpg">
                <img src="images/banner1.jpg">
            </figure>
        </div>
    </div>
<!-- image slider(end) -->

<section class="content">
  <h2>Latest News</h2>
  <div class="news-container">
    <?php  
      include 'config.php';
      $select_news = mysqli_query($conn, "SELECT * FROM `news` ORDER BY NID DESC LIMIT 3") or die('Query failed');
      if(mysqli_num_rows($select_news) > 0){
        while($fetch_news = mysqli_fetch_assoc($select_news)){
    ?>
    <div class="news">
        <img src="uploaded_images/<?php echo $fetch_news['image']; ?>" alt="News Image">
        <div class="news-content">
        <h3><?php echo $fetch_news['title']; ?></h3>
        <p><?php echo $fetch_news['content']; ?></p>
        <a href="news-detail.php?NID=<?php echo $fetch_news['NID']; ?>">Read More</a>
        </div>
    </div>
    <?php
        }
      } else {
        echo '<p class="empty">No news added yet!</p>';
      }
    ?>
  </div>
</section>

<section class="about-us">
  <div class="container">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vestibulum lacus mauris, in consectetur risus semper in. Donec auctor nulla non ante iaculis bibendum. Curabitur varius ante et facilisis feugiat. Vestibulum auctor maximus tortor, a commodo elit tempor non. Nullam id enim ac mauris rutrum consequat a vitae ante.</p>
    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum eget quam at quam eleifend consequat. Vivamus fringilla tempor dui in fringilla. Morbi tincidunt erat non dui congue pulvinar. Duis in nulla non elit volutpat dapibus.</p>
    <p>Phasellus at mauris ultrices, placerat ligula at, facilisis tellus. Integer commodo ante et ligula laoreet, vel dignissim neque eleifend. Sed interdum felis ac ipsum ullamcorper, id tristique lectus malesuada. Nullam ac ex tincidunt, suscipit urna sed, posuere justo. Fusce ac volutpat tortor.</p>
  </div>
</section>
<!-- Footer -->
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

</body>
</html>
