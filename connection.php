<!DOCTYPE html>
<html>

	<?php
		$servername = "localhost";
		$username = "root";
		$password = "password";
		
		// Create connection
		$kon = new mysqli($servername, $username, $password);
		
		// Check connection
		if ($kon->connect_error){
			die("Connection Failed: " . $kon->connect_error);
			
		}
		echo "Connected Successfully";
?>
<body>
