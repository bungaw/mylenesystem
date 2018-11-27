<?php
	require_once 'class.php';
 
	if(ISSET($_POST['save'])){	
		$firstname = $_POST['description'];
		$lastname  = $_POST['num_number'];
		$conn = new db_class();
		$s ="INSERT INTO game_record"($description, $num_number(
		$conn->create($s);
		header('location: index.php');
	}	
 
?>