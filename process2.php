<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-3"> 
  <h2>Owner</h2>
  <!-- Button to Open the Modal -->
  <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 Click
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Created By:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Mylene P. Tañola:):)
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Kamsamnida</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>

<style>
body{
	color: #0000FF;
	text-align: center;
	background-image: url("nature.jpg");
	background-repeat: no-repeat;
	font-family: harrington;
	border-radius: 8px;
	
}
#bordering { 
    border: 10px solid transparent;
    padding: 15px;
    border-image: url(border.png) 30 round;
	
	}

	</style>
	<body>
	<center>
<div class="main">
<?php
if($_GET['name'] || $_GET['age'] || $_GET["bdate"] || $_GET["gender"] || $_GET["strands"] || $_GET["grade"] ||$_GET["stud_id"]){

		echo "<h1>HI I'M". $_GET['name']. "<br/>";
		echo "I'M". $_GET['age']. " years old.";
		echo "I live in". $_GET['address']. "<br/>";
		echo "MY birthday will be on". $_GET['bdate'];
		echo "I'M". $_GET['gender'];
		echo "AND I'M TAKING THE COURSE WHICH IS". $_GET['strands'];
        echo "I'M GRADE". $_GET['grade'];
		echo "STUDENT</h1>". $_GET['stud_id'];
        exist();
}	
?>
</center>
</body>
</html>

