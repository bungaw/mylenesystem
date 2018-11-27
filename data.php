
<?php

		$servername="localhost";
		 $username="root";
		 $password="password";
		 $dbname="schoolDB_tañola";
		 
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM subjects";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		 echo "<table class='table table-dark table-stripped'>
				 <tr>
					  <th> subject_id </th> 
					  <th> subject_name</th>
					  <th> subject_descrip</th>
					  <th>create_date </th>
				  </tr>";
				  
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row['subject_id'] . "</td><td>" . $row['subject_name'] . "</td><td>" . $row['subject_descrip'] . "</td><td>" . $row['create_date'] . "</td></tr>";
		}
		 echo "</table>";
	} else {
		echo "0 results";
	}
	$conn->close();
	?>