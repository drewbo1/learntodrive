<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/x-icon" href="./images/small_lplate_border.jpg"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Search for approved driving instructors in Northern Ireland" >
  <meta name="author" content="Andy Marshall">
  <meta name="keywords" content="Learn to drive, driving instructor search, NI, Northern Ireland, DVANI, Approved Driving Instructor ">
  <title>Learn to Drive NI | Welcome</title>
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<header>
<div class="container">
  <div id="branding">
    <h1>Learn to Drive <span class="highlight">NI</span></h1>
    <!--<img src="./images/logo_cropped.jpg" alt="Logo">-->
    <nav>
      <ul>
        <li class="current"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        </ul>
    </nav>
    </div>
</div>
</header>
<section id="showcase">
  <div class="container">
    <h1>Find Approved Driving Instructors</h1>
    <p>Search for DVA Approved Instructors in Northern Ireland.</p>
  </div>
</section>
<section id="search">
  <div class="container">
    <h1>Search for Approved Instructors now</h1>
    <form action="search.php" method="post">
      <input type="text" name="address" id="address" placeholder="Enter your postcode...">
      <button type="submit" class="button_1">Search</button>
    </form>
  </div>
</section>
<section id="boxes">
  <div class="container">
    <div class="box">
      <img src="./images/car.png" alt="">
      <h3>Car</h3>
      <p>Search for car driving instructors</p>
    </div>
    <div class="box">
      <img src="./images/motorcycle.png" alt="">
      <h3>Bike</h3>
      <p>Search for car driving instructors</p>
    </div>
    <div class="box">
      <img src="./images/truck.png" alt="">
      <h3>HGV</h3>
      <p>Search for HGV and PSV driving instructors</p>
    </div>
  </div>
</section>
<footer>
  <p>Learn to Drive NI, Copyright &copy; 2018</p>
</footer>
</body>
</html>
