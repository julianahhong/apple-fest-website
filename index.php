<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <title>Apple Harvest Festival</title>
  </head>
	
  <body>
     
	<?php include("scripts/header.php"); ?>

	<div id="photo_slider">
		<img id = "photo" src="img/apples.jpg">
		<div class="dot" id="back" onclick="previousImage()"></div>
		<div class="dot" id="next"onclick="nextImage()"></div>
	</div>
  </body>
  <footer>
	<script src="js/main.js"></script>
  </footer>
</html>
