<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Describe of the website.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Slider unknow image</title>
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-slick-theme.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<?php
/**
 * Get all slider image and put them in an array
 */
$path = __DIR__ . '/img/slider/';
$files = array_diff(scandir($path), array('.', '..')); // strip . and ..
 ?>
<body>
  <header>
  	<h1>Slider Unknow Image</h1>
    <p>A slider that works without knowing what is the name, order, quantity of the images it needs to show.</p>
    <p>This particular version of the slider is setup as follows :</p>
    <ul>
      <li>Dimension fo the slider are 200 x 100</li>
      <li>No navigation available</li>
      <li>Image change after 2seconds</li>
      <li>The slider show only one image</li>
    </ul>
  </header>
	<main>
    <div class="slider">
      <img src="img/slider/boba_fett-florian.jpg" alt="">
      <img src="img/slider/ark_memory_usage.png" alt="">
      <img src="img/slider/matrix_2017-john_wick2.jpg" alt="">
    </div>
	</main>
</body>
<footer>
	<p>Made by <a href="https://skullmasher.io">Skullmasher</a></p>
</footer>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</html>
