<!DOCTYPE html>
<html>
<?php
if(isset($_POST['name'])){
$servername = $_POST['name'];
$username =  $_POST['user'];
$password =  $_POST['pass'];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
} 
else{
	// Create database
$sql = "CREATE DATABASE mylene";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
}
}
?><meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.form-group{
	width:60%;
	text-align:center;
	border: 1px solid black;
	border-radius:20px;
	
}
</style>
<center>
<body>
    <form action="<?php $PHP_SELF ?>" method="POST" class="form-group">
	<label>SERVER NAME:</label>
	<input type="text" name="name" class="form-control">
     <label>User:</label>
	<input type="text" name="user" class="form-control">
	<label>PASSWORD:</label>
	<input type="password" name="pass" class="form-control">
	<BR>
	<input type="submit" class="form-control" style="background-color:green;font-size:15px;color:white;"></button>
	</form>
	</center>
	</body>
	
	
</html>