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
  <title>Learn to Drive NI | Services</title>
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
        <li ><a href="about.php">About</a></li>
        <li class="current"><a href="services.php">Services</a></li>
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
  <h1 class="page-title">Services</h1>
  <ul id="services">
    <li>
      <h3>Service 1</h3>
      <p>Morbi dapibus, est eget rhoncus suscipit, tellus lorem consequat nunc, convallis eu sit amet ex. Suspendisse ligula risus, ornare vitae condimentum ut, consequat ut nulla. Sed quis nisl diam. In cursus ut velit eget convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In euismod magna et ultrices auctor.</p>
      <p>Pricing £500 - £1500</p>
    </li>
    <li>
      <h3>Service 2</h3>
      <p>Morbi dapibus, est eget rhoncus suscipit, tellus lorem consequat nunc, . Ut ac justo sit amet est cursus convallis eu sit amet ex. Suspendisse ligula risus, ornare vitae condimentum ut, consequat ut nulla. Sed quis nisl diam. In cursus ut velit eget convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In euismod magna et ultrices auctor.</p>
      <p>Pricing £20 per month</p>
    </li>
    <li>
      <h3>Service 3</h3>
      <p>Morbi dapibus, est eget rhoncus suscipit, tellus lorem consequat nunc,. Suspendisse ligula risus, ornare vitae condimentum ut, consequat ut nulla. Sed quis nisl diam. In cursus ut velit eget convallis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In euismod magna et ultrices auctor.</p>
      <p>Pricing £150 per month</p>
    </li>
  </ul>
</article>
<aside id="sidebar">
  <div class="dark">
  <h3>Contact us</h3>
  <form class="quote">
  						<div>
  							<label>Name</label><br>
  							<input type="text" placeholder="Name">
  						</div>
  						<div>
  							<label>Email</label><br>
  							<input type="email" placeholder="Email Address">
  						</div>
  						<div>
  							<label>Message</label><br>
  							<textarea placeholder="Message"></textarea>
  						</div>
  						<button class="button_1" type="submit">Send</button>
					</form>
</div>
</aside>
</div>
</section>
<footer>
  <p>Learn to Drive NI, Copyright &copy; 2018</p>
</footer>
</body>
</html>
