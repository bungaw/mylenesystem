<!doctype>
<html>
<title>SFSHS ALUMNI HOMECOMING 2018</title>
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
			  echo "<h1> save failed!</h1>";
		  }
		  $conn->close();
	 }
	 }
?>

<style>


body{
	background-color:darkgrey;
	background-image: url("nature.jpg");
	 background-repeat: no-repeat;
	  background-size:cover;
	font-family:harrington;
	width:95%;
	height:50%;
	text-align:center;
	color:#FF1493;
}
</style>
<body>
<center>
<h1 style="color:red;"><marquee behavior="scroll" direction="alternate"
           onmouseout="this.start();">SFSHS ALUMNI HOMECOMING 2018</marquee></h1>	
 <h2> REGISTRATION PAGE<h2>

        <form action = "<?php $_PHP_SELF ?>"  method = "get">
     <p>FirstName:<br><input  type = "text" name = "fn" placeholder=" Your firstName" /></p>
	 <p>LastName:<br><input  type = "text" name = "ln" placeholder=" Your lastname" /></p>
	 <p>Email:<br><input type = "text" name = "email"/><p>
	 <p>RegistrationDate:<br><input type= "date" name ="reg_date"/></p>
	 
     <p><input type = "submit" name="submit" value="Register"/></p>
</form>
	<h2><a href="myalumni">Show Records</a></h2>
</center>
</body>

</html>