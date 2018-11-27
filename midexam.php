<!DOCtype>
<html>
<title>Midterm Exam</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
 <?php  

     if(isset($_GET['submit'])){
		 
		 $Subject_id = $_GET['sub_id'];
		 $Subject_name = $_GET['sub_name'];
		 $Subject_descrip = $_GET['sub_descript'];
		 $created_date = $_GET['created_date'];
		 
		 $servername="localhost";
		 $username="root";
		 $password="password";
		 $dbname="SchoolDB_tañola";
		 
		 // Create connection
		 $conn =new mysqli($servername,$username, $password,$dbname);
		 // Create connection
		 if($conn->connect_error){
			 echo "database connection failed! " . $conn->connect_error;
	 }else{
		 
		 $sql="INSERT INTO subjects(subject_id, subject_name, subject_descrip, create_date) VALUES('$Subject_id','$Subject_name','$Subject_descrip','$created_date')";
		  
		  if($conn->query($sql) === TRUE){
			  echo "Record for $Subject_id $Subject_name saved!";
			  
		  }else{
			  echo "<h1> save failed!</h1>". $conn->error;
		  }
		  $conn->close();
	 }
	 }
?> 


<body>
<center>
<h1 style="color:red;"><marquee behavior="scroll" direction="alternate"
           onmouseout="this.start();">MIDTERM EXAM 2018</marquee></h1>	
 <h2> REGISTRATION PAGE<h2>

	  <form action = "<?php $_PHP_SELF ?>"  method = "get"
	 <p>Subject_id:<br><input  type = "text" name = "sub_id" /></p>
	 <p>Subject_name:<br><input  type = "text" name = "sub_name" /></p>
	 <p>Subject_descrip:<br><input type = "text" name = "sub_descript"/><p>
	 <p>created_date:<br><input type= "date" name ="created_date"/></p>
	 
     <p><input type = "submit" name="submit" value="Register"/></p>

<h2><a href="data.php">Show Data</a></h2>

</body>
</html>