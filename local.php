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
