<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>LogIn</title>
		<link rel="stylesheet" type="text/css" href="BasicLayout.css"/>
	</head>
	
	<body class = "bg">
	
		<?php
			include("head.php");
		?>
	
	<div class = "center">
		<form action="loginValidation.php" method = "POST">
			<div class="imgcontainer">
				<img src="woman.png" alt="Image of a neutral character" class="avatar">
			</div>

			<div class="container">
					<h1 class = "headline4">E-mail</h1>
					<input type="text" placeholder="Enter Username" name="email" required>

					<h1 class = "headline4">Password</h1>
					<input type="password" placeholder="Enter Password" name="pwd" required>
					
					<button type="submit" name="submit" class = "logInButton">Login</button>
					<span>Not registered? <a href="UserRegister.php">Sign up</a></span>
			</div>

			<div class="lastContainer">
				<button type="button" class="cancelbtnLogIn">Cancel</button>
				<div>
					<span class="psw">Forgot <a href="#">password?</a></span>
				</div>
			</div>
		</form>
	
	</div>
		
	</body>
</html>