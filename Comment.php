<?php 
	include("dbLogInConfig.php");
	date_default_timezone_set('Europe/Stockholm');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Comment</title>
		<link rel="stylesheet" type="text/css" href="BasicLayout.css"/>
	</head>
	
	<body>
		
		<?php
		
		function setComments($food){
			echo "<form method = 'POST' action= 'setComments.php' id='commentform'>
				<input type = 'hidden' name = 'uid' value = 'anonymous'>
				<input type = 'hidden' name = 'date' value = '".date('Y-m-d H:i:s')."'>
				<input type = 'hidden' name = 'food' value = '$food'>
				<textarea class = 'textArea' name='message' rows='3' cols='40' placeholder='Write your opinion or ask a question'></textarea>
				<div>
					<input type='submit' name = 'submit'>
				</div>
				</form>";
		}
			
		function getComments($food){
			$sql = "SELECT * FROM comments";
			global $conn;
			$result = mysqli_query($conn, $sql);
			while($row = mysqli_fetch_assoc($result)){
				if($row['dish'] == $food){
					echo "<div class = 'comment-boxes'>";
						echo $row['user_id']. "<br>";
						echo $row['date']. "<br>";
						echo $row['message']. "<br><br>";
					echo "</div>";
				}
			
		}
		}
		?>
	</body>
</html>