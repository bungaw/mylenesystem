<style>
body{
	background-color:darkgrey;
}
	</style>
<html>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  
  
  <body>
<div class="container">
 <a href="alumni2018.php">REGISTER NEW GUEST</a>
	
<?php  

     if(isset($_GET['submit'])){
		 
		 $firstName = $_GET['fn'];
		 $lastName = $_GET['ln'];
		 $email = $_GET['email'];
		 $regdate = $_GET['reg_date'];
		 
		 $servername="localhost";
		 $username="root";
		 $password="password";
		 $dbname="alumni";
		 
		 // Create connection
		 $conn =new mysqli($servername,$username, $password,$dbname);
		 // Create connection
		 if($conn->connect_error){
			 echo "database connection failed! " . $conn->connect_error;
	 }else{
		 
		 $sql="INSERT INTO myguests(firstName,lastName,email,reg_date) VALUES('$firstName','$lastName','$email','$regdate')";
		  
		  if($conn->query($sql) === TRUE){
			  echo "Record for $firstname $lastname saved!";
			  
		  }else{
			  echo  "save failed!";
		  }
		  $conn->close();
	 }
	 }
?>
