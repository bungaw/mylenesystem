<html>
<link rel="stylesheet" href="css.css" />


<body>
<div class="ak">
 <h1>STUDENT PROFILE:)</h1>
 
 <h2>Dropdown Menu</h2>
<p>Move the mouse over the button to open the dropdown menu.</p>

<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

      <form action = "process2.php" method = "GET">
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
		<p>Grade: <select name="grade">
				<option value="11">11-A</option>
				<option value="11">11-B</option>
				<option value="12">11-A</option>
				<option value="12">11-B</option>
			</select></p>
		 <input type = "submit" />
      
	  </form>
    
   </body>
   </div>
</html>