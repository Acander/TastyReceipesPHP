<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Tasty Receipes</title>
		<link rel="stylesheet" type="text/css" href="BasicLayout.css"/>
	</head>
	
	<body class = "bg">
		<h1 class = "headline1">Tasty Receipes</h1>
		
		<?php
		echo "My first PHP script!";
		?>
		
		<ul class = "navigationBar">
			<li class = "navigation"><a href = "MainPage.php">Main page</a></li>
			<li class = "navigation"><a href = "Calender.php">Calender</a></li>
			<li class = "navigation"><a href = "Meatballs.php">Meatball recipe</a></li>
			<li class = "navigation"><a href = "Pancakes.php">Pancake recipe</a></li>
		</ul>
		
		<div class = "center">
		
			<h1 class = "headline2">Welcome to our humble site</h1>
			<h1 class = "headline3">Go to OUR Calender! Press the calendar image to see what to cook today:</h1>
			<a href = "Calender.php">
			<img class = "stdImage" src = "calendar.png" alt = "Picture of Calender"/></a>
		
			<img class = "stdImage" src = "Meatballs.jpg" alt = "Picture of Meatballs"/>
			<img class = "stdImage" src = "FluffPancakes.jpg" alt = "Picture of Pancakes"/>
		
		</div>
		
	</body>
</html>