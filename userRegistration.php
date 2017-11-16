<?php

	include("UserRegister.php");
	//include("dbLogInConfig.php");

	if(isset($_POST["pressButton"])){
		include_once("dbLogInConfig.php");
		
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
		$pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);
		$pwdRe = mysqli_real_escape_string($conn, $_POST["pwd-repeat"]);
		
		//Error handlers
		if(!($pwd == $pwdRe)){
			echo "Please re-submit passwords";
			header("Location: ../TastyRecepies/UserRegister.php?UserRegister=pwdFailure");
			exit();
		}
		else{
			$sql = "SELECT * FROM user WHERE email = 'email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			
			if($resultCheck > 0){
				echo "E-mail already registrered";
				header("Location: ../TastyRecepies/UserRegister.php?UserRegister=emailFailure");
				exit();
			}
			else{
				$sql = "INSERT INTO user (email, pwd) VALUES ($email, $pwd);";
				mysqli_query($conn, $sql);
				header("Location: ../TastyRecepies/index.php");
				exit();
			}
		}
	}
	else{
	}
	                                                           
?>