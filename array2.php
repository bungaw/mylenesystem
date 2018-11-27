<html>
   <body>
      
      <?php
         $average = array( 
            "akon" => array (
               "21st century literature" => 89,
               "general math" => 88,	
               "filipino" => 86
            ),
            
            "joy" => array (
               "21st century literature" => 90,
               "general math" => 88,
               "filipino" => 87
            ),
            
            "chay" => array (
               "21st century literature" => 88,
               "general math" => 88,
               "filipino" => 87
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "average for akon 21st century literature : " ;
         echo $average['akon']['21st century literature'] . "<br />"; 
         
         echo "average for joy general math : ";
         echo $average['joy']['general math'] . "<br />"; 
         
         echo "average for chay filipino : " ;
         echo $average['chay']['filipino'] . "<br />"; 
      ?>
   
   </body>
</html>