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
  <title>Learn to Drive NI | About us</title>
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
        <li><a href="index.php">Home</a></li>
        <li class="current"><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        </ul>
    </nav>
    </div>
</div>
</header>
<section id="search">
  <div class="container">
    <h1>Search for Approved Instructors now</h1>
    <form action="search.php" method="post">
      <input type="text" id="address" name="address" placeholder="Enter your postcode...">
      <button type="submit" class="button_1">Search</button>
    </form>
  </div>
</section>
<section id="main">
  <div class="container">
<article id="main-col">
  <h1 class="page-title">About us</h1>
  <p>Learn to drive NI is a free tool for those looking to learn to drive. It allows users to search for an Approved Driving Instructor in Northern Ireland using the DVA's own list.</p>
  <p class="dark">Mauris iaculis non tellus finibus sagittis. Donec felis ante, tincidunt vel condimentum non, accumsan non mauris. In fringilla luctus nisi, quis aliquam augue. Quisque a ex sagittis, consectetur ligula eu, porta metus. In volutpat bibendum imperdiet. Cras leo ex, auctor ac mauris a, facilisis euismod quam. In nec dui pretium, tristique nibh a, semper sapien. Proin commodo leo auctor ante interdum, in placerat sapien ornare. Cras condimentum consequat ipsum. Vestibulum consequat ipsum velit, pretium sagittis sem dapibus vitae. Duis feugiat neque sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer iaculis rutrum vestibulum. Mauris tellus risus, pharetra sed interdum at, aliquam a nisl. Pellentesque in iaculis lectus, sit amet auctor dolor. Morbi vulputate dignissim feugiat.</p>
</article>
<aside id="sidebar">
  <div class="dark">
  <h3>What we do</h3>
  <p>Cras nulla metus, interdum at condimentum id, ultricies id augue. Suspendisse auctor pulvinar ipsum. Nulla mollis felis vitae ornare volutpat. Suspendisse pharetra hendrerit tincidunt. Nunc faucibus dictum quam, vel consequat justo maximus at. Duis et congue nunc. Cras faucibus leo vel eros placerat auctor.</p>
</div>
</aside>
</div>
</section>
<footer>
  <p>Learn to Drive NI, Copyright &copy; 2018</p>
</footer>
</body>
</html>
