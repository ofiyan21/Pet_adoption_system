
<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Adopt-Here</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="icons8-pet-commands-summon-50.png" rel="icon">
  <link href="icons8-pet-commands-summon-50" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><img src=icons8-pet-commands-summon-50.png>AdoptHere<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#menu">Adoption</a></li>
           <!-- <li><a href="#events">Contact</a></li> -->
           <li><a href="contact.php">Contact</a></li>
           <li><a href="feedback.php">Feedback</a></li>
          <!-- <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Sign Up</a></li>  -->
         <!-- <li class="dropdown"><a href="#"><span><i style="font-size:23px"class="bi bi-person-lines-fill"></i></span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="login.php">Log In </a></li>
              <li><a href="signup.php">Sign Up</a></li>
            </ul>
          </li> -->
          
        </ul>
      </nav><!-- .navbar -->

        <!--profile-->
<?php  if(!$_SESSION['user']){?>
      <a class="btn-book-a-table" href="donation.php">Donate</a>
      <!-- <div class="dropdown"> -->
  <button class="dropdown-toggle btn-book-a-table" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i style="font-size:20px"class="bi bi-person-lines-fill"></i>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="login.php">Log In <i style="font-size:20px" class="bi bi-box-arrow-right"></i></a></li>
    <li><a class="dropdown-item" href="signup.php">Sign Up <i style="font-size:20px"class="bi bi-person-plus-fill"></i></a></li>
  </ul>
  <!--end ofprofile-->
  <?php } 
      else { ?><div align="right"><a href='index.php'>Hello, <b><?php echo $_SESSION['user'];?></b></a> 
  <a href="logout.php" title="Logout"><i class="bi bi-box-arrow-right" style="font-size:23px"></i></a><?php }?>
<!-- </div> -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>