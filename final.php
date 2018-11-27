<html>
<link rel="stylesheet" href="css.css" />
<html lang="en">

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
      <img src="gas.png" alt="GENERAL ACADEMIC" width="50px" height="1oopx">
    </div>
	<div class="carousel-item">
      <img src="care.png" alt="CAREGIVING" width="50px" height="1oopx">
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

<body>
	
<div class="mine">
<h1 style="text-align:center; font-family: harrington; background-color:#00FFFF	;">STUDENTS PROFILE</h1>


<center>
     <p>Name:<input  type = "text" name = "name" placeholder=" Your Name" /></p>
	 <p>Age:<input  type = "text" name = "age" placeholder=" Your Age" /></p>
	 <p>Birth Date:<input type = "date" name = "bdate"/><p>
	 <p>Gender:<select name ="gender"/></p>
	  <option value="m">Male</option>
	  <option value="f">Female</option>
	  </select></p>
     <p>Strand:<select name ="strand"/></p>
	   <option value="Programming">Programming</option>	
       <option value="CSS">Computer system servicing</option>	
       <option value="Organic agriculture">Organic agriculture</option>	
       <option value="Abm">Accountancy 3business management</option>	
	   <option value="caregiving">Caregiving</option>	
       </select></p>
	   <p>Grade:<select name="grade"/></p>
	   <option value="11">11-A</option>
	   <option value="11">11-B</option>
	   <option value="12">12-A</option>
	   <option value="12">12-B</option>
	   </select></p>
	   <p>Student I.D <input class="SD" type="number" name="Stud_id"/></p>
	   
	  <input type = "Submit"/>
	
	
	</form>
	</div>
	</body>
	
	</html>