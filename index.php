<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<title>Apple Harvest Festival</title>
</head>


<body>
	<?php include("scripts/header.php"); ?>

<div id="body1">
	<div id="photo_slider">
		<img id = "photo" src="img/apples.jpg">
		<!--Photo Source: https://www.facebook.com/downtownithaca/photos/a.10157479674205576.1073741855.132710300575/10157479674630576/?type=3&theater -->
		<!-- Additional photo credits available in js/main.js file -->
		<div class="dot" id="back" onclick="previousImage()"></div>
		<div class="dot" id="next" onclick="nextImage()"></div>
	</div><!--end of photo_slider div-->

	<div id="container">
		<div id="tag1"></div>

		<div id="general_info">
			<h1>About</h1>
			<p>Date: September 30, 2016 - October 2, 2016</p>
			<p>Ithaca's premier event of the Fall, Apple Harvest Festival is a three day celebration of food, fun, and apples!</p>
			<p>The 34th Annual Great Downtown Ithaca Apple Harvest Festival by Presented Tompkins Trust Company is set to take place September 30 - October 2, 2016.</p>
		</div><!--end of general_info div-->

		<div id="tag2"></div>
		<div id="event_content">
			<div id="events"></div>
			<h1>Events</h1>
			<p>The 2016 Apple Harvest Festival hosts plenty of apples, local produce, fresh baked goods, family entertainment at every turn, games, rides, prizes and live performances on two stages.</p>
			<p>Apple Harvest Festival is a great introduction to the rich farm and artist community of Ithaca.</p>
			<p>First time visitors can witness a variety of wonderful local entertainment while also visiting the historical outdoor pedestrian shopping mall, The Ithaca Commons.  The pedestrian mall is the epicenter of the festival and the gateway to a nostalgic journey to harvest season fun. Kids can visit with the goats and learn how fiber is made with Laughing Goat Fiber Farm.  Looking for quality goods, visit 60 different handcrafting artisans along Cayuga Street at the fall craft show which includes jewelry, ceramics, home decor, body care, specialty gifts, unique sculpture, clothing and so much more.</p>
		</div><!--end of event_content div-->
		
		<div id="tag3"></div>
		<div id="food_content">
			<h1>Food</h1>
			<p>Over 100 vendors will be selling unique apple varieties, hot apple cider donuts, kettle corn, local farm fresh baked goods and a multitude of around the world specialties. Local farmers are on site selling everything from tasty apple beverages to local pumpkins and of course, apples, apples and more apples. Wineries and cideries have regional beverages available for tasting and purchase.</p>
		</div><!--end of food_content div-->
		
		<div id="tag4"></div>

		<div id="direction_content">
			<h1>Directions</h1>
			<p>There are several ways to get from Cornell’s campus to Ithaca Commons! You can choose to walk or take public transportation offered by TCAT.</p>
			<p>On the first day of AppleFest, which falls on Friday, you can take route 30, 32 from the Risley stop on North Campus or route 10 from the Boldt Stop on West Campus to the Seneca bus stop. On Saturday and Sunday, you can take route 70, 72 from both North and West Campus, which is free of charge if you bring your Cornell ID.</p>
			<div class="image_box">
				<!-- image from https://tcat.nextinsight.com/routes/440-->
				<img src="img/direction3.jpg" alt="t cat route 10">
				<p class="caption">Figure.3 Route 10</p>
				<!-- image from https://tcat.nextinsight.com/routes/416-->
				<img src="img/direction1.jpg" alt="t cat route 30">
				<p class="caption">Figure.1 Route 30</p>
				<!-- image from https://tcat.nextinsight.com/routes/469-->
				<img src="img/direction2.jpg" alt="t cat route 70">
				<p class="caption">Figure.2 Route 70</p>
			</div><!-- end of image_box div -->

		</div><!--end of container div-->
	</div><!--end of direction_content div-->
</div><!-- end of body1 div -->
</div>
</body>

<footer>
	<p>Come explore Apple Harvest Festival! </p>
	<script src="js/date.js"></script>
	<script src="js/main.js"></script>
</footer>

</html>
