<?php 
	include("dbLogInConfig.php");
	
	$sql = "SELECT * FROM comments";
	$result = msqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)){
		if($row['dish'] == 
	}

		
?>