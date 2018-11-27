<html>
	<body>
	
		<?php
			$a = 0;
			$b = 0;
			
			for( $i = 0; $i<10; $i++ ){
				$a += 10;
				$b += 5;
			echo "counter i=$i current value for a = $a  and b = $b";
			}
			
			echo( "At the end of the loop a = $a and b = $b" );
		?>
</html>