<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>UserRegister</title>
		<link rel="stylesheet" type="text/css" href="BasicLayout.css"/>
	</head>
	
	<body class = "bg">
	
	<?php
		include("head.php");
	?>
	
	<div class = "center">
		
		<form action="userRegistration.php" method = "POST">
			<h1 class = "headline2">Sign Up</h2>
			<div class="container">
				<h1 class = "headline4">Email</h1>
				<input type="text" placeholder="Enter Email" name="email" required>

				<h1 class = "headline4">Password</h1>
				<input type="password" placeholder="Enter Password" name="pwd" required>

				<h1 class = "headline4">Repeat Password</h1>
				<input type="password" placeholder="Repeat Password" name="pwd-repeat" required>
				<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

				<div class = "buttonContainer">
					<button type="button"  class="cancelbtnUserRegi">Cancel</button>
					<button type="submit" class="signupbtn" name = "pressButton">Sign Up</button>
				</div>
			</div>
		</form>
	
	</div>
		
	</body>
</html>