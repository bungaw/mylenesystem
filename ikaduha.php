<?php
   if($_GET['name'] || $_GET['age']) {
	   
	   if($_GET['gender']=="f"){
			echo "<h1>Welcome". $_GET['name:)']. "<br />";
			echo "You are ". $_GET['age']. " years old.";
			echo "Your birthday will be on</h1>". $_GET['bdate'];
	  }else{
			echo "<h1>Hello Freny:)". $_GET['name']. "<br />";
			echo "You Are</h1>". $_GET['age']. " year old.";
	   }
      //exit();
   }
?>
<html> 
 <style>
 .my{
	color: dark;
	text-align: center;
	background-image:url("methodpic2.jpg");
	background-repeat:no-repeat;
	font-family: verdana;
	text-shadow: 2px 2px red;
	border-radius: 8px;
	
	}

 .ak{
	background-image: url("methodget4.jpg");
	background-repeat:no-repeat;
	
}
 </style>

  
 <body class="my">
<div class="ak">
 <h1>STUDENT PROFILE:)</h1>
      <form action = "process.php" method = "GET">
         <h1><p>Name: <input class="akon" type = "text" name = "name" placeholder="Your Name" /></p></h1>
         <h1><p>Age: <input class="akon" type = "text" name = "age" placeholder="Your Age" /></p></h1>
         <h1><p>Birth Date: <input class="akon" type = "date" name= "bdate"/></p></h1>
		 <h1><p>Gender: <select class="akon" name = "gender"></h1>
				<option value="m">Male</option>
				<option value="f">Female</option>
			</select></p>
		 <p>Strands: <select class="akon" name = "strands">
				<option value="Programming">Programming</option>
				<option value="General Academic Strand">General Academic Strand</option>
				<option value="Accountancy Business Management">Accountancy Business Management</option>
				<option value="Computer System Servicing">Computer System Servicing</option>
				<option value="Organic Agriculture">Organic Agriculture</option>
				<option value="Caregiving">Caregiving</option>
			</select></p>
		 <input type = "submit" />
      </form>
    
   </body>
   </div>
</html>
