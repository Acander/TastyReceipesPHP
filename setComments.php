<?php 
	include("dbLogInConfig.php");
	
		if(isset($_POST['submit'])){
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];
			$food = $_POST['food'];
			
			$sql = "INSERT INTO comments (user_id, message, date, dish)  VALUES ('$uid', '$message', '$date', '$food')";
			mysqli_query($conn, $sql);
			
			header("Location: ../TastyRecepies/$food.php");
			exit();
		}
		else{
			echo "FAIL";
		}

	
?>