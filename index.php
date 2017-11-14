<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Tasty Receipes</title>
		<link rel="stylesheet" type="text/css" href="BasicLayout.css"/>
	</head>
	
	<body class = "bg">
	
	<h1 class = "headline1">Tasty Receipes</h1>
		
		<ul class = "navigationBar">
			<li class = "navigation"><a href = "MainPage.php">Main page</a></li>
			<li class = "navigation"><a href = "Calender.php">Calender</a></li>
			<li class = "navigation"><a href = "Meatballs.php">Meatball recipe</a></li>
			<li class = "navigation"><a href = "Pancakes.php">Pancake recipe</a></li>
		</ul>
	
	<div class = "center">
		<form action="/action_page.php">
			<div class="imgcontainer">
				<img src="woman.png" alt="Image of a neutral character" class="avatar">
			</div>

			<div class="container">
					<h1 class = "headline4">Username</h1>
					<input type="text" placeholder="Enter Username" name="uname" required>

					<h1 class = "headline4">Password</h1>
					<input type="password" placeholder="Enter Password" name="psw" required>
					
					<button type="submit" class = "logInButton">Login</button>
					<input type="checkbox" checked="checked"> Remember me
			</div>

			<div class="lastContainer">
				<button type="button" class="cancelbtn">Cancel</button>
				<div>
					<span class="psw">Forgot <a href="#">password?</a></span>
				</div>
			</div>
		</form>
	
	</div>
		
	</body>
</html>