<html>
	
	<?php
		
		$username = "username";
		$password = "password";
		$dbname = "database";
		//$server = $_SERVER['SERVER_NAME];
	
		//create connection
		//$conn = mysqli_connect($SERVER_NAME, $username, $password, $dbname);
		$conn = mysqli_connect($username, $password, $dbname);
		
	
		//check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());	
		}
		echo "Connected successfully";
	?>
</html>
