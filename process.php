<!DOCTYPE html>
<html>

	
	<style>
		body {
			background-image: url('educ.jpg');
			background-repeat: no-repeat;
			background-size: cover;
			
		}
		
		.stud {
			font-size :45px;
			text-align: center;
			color: #fff;
			text-shadow: -2px 5px 20px rgb(10, 10, 10);
			letter-spacing: 4px;
			font-style: italic;
			font-family: 'Acme', sans-serif;
			
		}
		img {
			width: 80px;
			height: 100px;
			float: left;
			margin-right: 50px;
			
		}
		
		</style>
		
<body>
<img src="methodget4.jpg" />
<center>
<h1 class="stud"> Student's Profile </p>

<p>_____________________________</p>


<?php


		if( $_GET["name"] || $_GET["age"]) {
			echo "Welcome". $_GET['name']. "<br />";
			echo "You are". $_GET['age']. "years old. <br />";
			echo "Your are ". $_GET['gender']. "<br />";
			echo "From ". $_GET['section']. "". $_GET['grade']. "<br />";
			echo "Student I.D is ". $_GET['Stud_id']. "<br />";
			
			
			exit()
		}
		
		
?>
</center>
</body>
</html>