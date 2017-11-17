<?php
	include("dbLoginConfig.php");

	if (isset($_POST['commentDelete'])){
		$c_id = $_POST['c_id'];
		$food = $_POST['food'];
		$sql = "DELETE FROM comments WHERE c_id = '$c_id'";
		$result = mysqli_query($conn, $sql);
		header("Location: ../TastyRecepies/$food.php");
		exit();
	}
?>