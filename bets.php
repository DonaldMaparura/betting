<?php
                                   session_start();

// php populate html table from mysql database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "betting";

// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
// mysql select query
$evaluated = new boolval();
$won = new boolval();
$query = "SELECT * FROM `bets`";
$result1 = mysqli_query($connect, $query);

// result for method one
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="assets\images\favicon.jpg">
  <title>Triple Betting - Sports Betting HTML Template</title>
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="assets\css\fontawesome.min.css">
  <!-- flat icon css link -->
  <link rel="stylesheet" href="assets\css\flaticon.css">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="assets\css\bootstrap.min.css">
  <!-- animate css link -->
  <link rel="stylesheet" href="assets\css\animate.css">
  <!-- slick slider css link -->
  <link rel="stylesheet" href="assets\css\slick.css">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="assets\css\lightcase.css">
  <!-- main style css link -->
  <link rel="stylesheet" href="assets\css\style.css">
  <!-- responsive css file -->
  <link rel="stylesheet" href="assets\css\responsive.css">
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

  <div class="custom-cursor"></div>
  <!--  header-section start  -->
  <header class="header-section">
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu ml-auto">
              <li ><a href="index.html">Home</a></li>
              <li class="active"><a href="bets.php">Results</a></li>
              <li><a href="about.html">About us</a></li>
              <li><a href="service.html">Services</a></li>  
              <li><a href="contact.html">contact us</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="registration.html">Registration</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- banner-section start -->
  <section class="breadcum-section">
    <div class="breadcum-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcum-content text-center">
              <h3 class="title">Results</h3>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">home</a></li>
                <li class="breadcrumb-item active">Result</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner-section end -->

  <!-- result-section start -->
  <?php while($row1 = mysqli_fetch_array($result1)):;?>
  <br>
  <section class="result-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h5 class="section-title">Week <?php echo $row1[0];?></h5>
            <!-- <p>On insensible possession oh particular attachment at excellence in. The books arose but miles happy she.</p> -->
          </div>
        </div>
      </div>
      <div class="row mt-mb-5">
        <div class="col-lg-12">
          <div class="result-item d-flex text-center align-items-center justify-content-center">
            <div class="team team--left">
              <span class="name"><?php echo $row1[4];?></span>
              <!-- <span class="flag"><img src="assets\images\flag\uruguay.jpg" alt="image"></span> -->
            </div>
            <div class="result-details">
              <p>
                <span class="left-team-result"><?php echo $row1[5];?></span>
                <span class="right-team-result"><?php echo $row1[6];?></span>
              </p>
              <span class="date"><?php echo $row1[1];?></span>
            </div>
            <div class="team team--right">
              <span class="name"><?php echo $row1[7];?></span>
              <!-- <span class="flag"><img src="assets\images\flag\brazil.jpg" alt="image"></span> -->
            </div>
            
          </div>
        
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>

  <!-- result-section end -->
  <?php endwhile;?>

  <!-- footer-section start -->
  <footer class="footer-section">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget widget-about">
              <ul class="address-list">
                <li>9288 Peninsula Court Meriden, CT 06450</li>
                <li>demo@demomail.com</li>
                <li>+01-1234-9876</li>
              </ul>
              <ul class="social-links d-flex">
                <li><a href="#0"><i class=" fa fa-facebook-f"></i></a></li>
                <li><a href="#0"><i class=" fa fa-twitter"></i></a></li>
                <li><a href="#0"><i class=" fa fa-youtube"></i></a></li>
                <li><a href="#0"><i class=" fa fa-dribbble"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="footer-widget widget-menu">
              <h3 class="widget-title">Menu</h3>
              <ul class="menu-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">In-play</a></li>
                <li><a href="#">Promotions</a></li>
                <li><a href="#">Statisti</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="footer-widget widget-menu">
              <h3 class="widget-title">Menu</h3>
              <ul class="menu-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Blog Details</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 col-sm-6">
            <div class="footer-widget widget-subscribe">
              <h3 class="widget-title">subscribe</h3>
              <div class="widget-subscribe-body">
                <p>Lorem ipsum dolor sit amet, consectetur</p>
                <form class="subscribe-form">
                  <input type="email" name="subs-email" id="subs-email" class="subs-email" placeholder="Email Address">
                  <input type="submit" value="Subscribe" class="sub-btn">
                </form>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- footer-top end -->
    <div class="footer-bottom text-center">
      <div class="container">
        <p>2019 All Rights Reserved. - Created by <a href="index.html">Triple Betting</a></p>
      </div>
    </div>
  </footer>
  <!-- footer-section end -->

  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-angle-up"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- main jquery library js file -->
  <script src="assets\js\jquery-3.3.1.min.js"></script>
  <!-- bootstrap js file -->
  <script src="assets\js\bootstrap.min.js"></script>
  <!-- slick slider js file -->
  <script src="assets\js\slick.min.js"></script>
  <!-- lightcase js file -->
  <script src="assets\js\lightcase.js"></script>
  <!-- wow js file -->
  <script src="assets\js\wow.min.js"></script>
  <!-- tweenmax js file -->
  <script src='assets\js\TweenMax.min.js'></script>
  <!-- main js file -->
  <script src="assets\js\main.js"></script>
</body>
</html>