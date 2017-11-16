<?php

	session_start();
	
	if(isset($_POST["submit"])){
		
		include("dbLoginConfig.php");
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
		$pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);
		
		$sql = "SELECT * FROM user WHERE email = '$email' AND pwd = '$pwd'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) {
			header("Location: ../TastyRecepies/index.php?login=error");
			exit();
		}
		else{
			$row = mysqli_fetch_assoc($result);
			
			$_SESSION['e'] = $row["email"];
			$_SESSION['p'] = $row["pwd"];
			header("Location: ../TastyRecepies/MainPage.php");
			exit();
		}
		
	}
	else{
	}
	
?>