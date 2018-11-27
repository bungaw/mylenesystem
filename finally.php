
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 50%;
  }
  </style>
</head>
<body>
<center>
<h1 style="font-family:harrington; color:red;">STA FE STAND ALONE SENIOR HIGH SCHOOL</h1>
</center>
<div class="container mt-3">

<h2>STRANDS OFFER</h2>
<div id="myCarousel" class="carousel slide">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li class="item1 active"></li>
    <li class="item2"></li>
    <li class="item3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner"  style="width:60%;">
    <div class="carousel-item active">
      <img src="ict.png" alt="ICT PROGRAMMNING" width="50px" height="100px">
    </div>
    <div class="carousel-item">
      <img src="abm.jpg" alt="Accountancy BUSINESS MANAGEMENT" width="50px" height="100px">
    </div>
    <div class="carousel-item">
      <img src="gas.png" alt="GENERAL ACADEMIC" width="50px" height="50px">
    </div>
	<div class="carousel-item">
      <img src="care.png" alt="CAREGIVING" width="50px" height="50px">
    </div>
	<div class="carousel-item">
      <img src="org.jpeg" alt="ORGANIC AGRICULTURE" width="50px" height="50px">
    </div>
	<div class="carousel-item">
      <img src="css.jpg" alt="COMPUTER SYSTEM SERVICING" width="50px" height="50px">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    
    // Enable Carousel Controls
    $(".carousel-control-prev").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".carousel-control-next").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>

</body>
</html>
<center>
<body>
<div class="ak">
 
 <strong><h1 style="font-family: harrington";> STUDENT PROFILE:)</h1>
	  <form action = "process2.php" method = "GET">
         <p>Name: <input class="akon" type = "text" name = "name" placeholder="Your Name" /></p>
         <p>Age: <input class="akon" type = "text" name = "age" placeholder="Your Age" /></p>
         <p>Birth Date: <input class="akon" type = "date" name= "bdate"/></p>
		<p>Gender: <select class="akon" name = "gender">
				<option value="M">Male</option>
				<option value="F">Female</option>
			</select></p>
		 <p>Address: <input class="akon" type = "text" name = "address" placeholder="Address" /></p>
		 <p>Strands: <select class="akon" name = "strands"/></p>
				<option value="Programming">Programming</option>
				<option value="General Academic Strand">General Academic Strand</option>
				<option value="Accountancy Business Management">Accountancy Business Management</option>
				<option value="Computer System Servicing">Computer System Servicing</option>
				<option value="Organic Agriculture">Organic Agriculture</option>
				<option value="Caregiving">Caregiving</option>
				</select></p>
		<p>Grade: <select name="grade">
				<option value="11">11-A</option>
				<option value="11">11-B</option>
				<option value="12">12-A</option>
				<option value="12">12-B</option>
			</select></p></strong>
		 <input type = "submit" />
      </form>
    
   </body>
   </div>
   </center>
</html>