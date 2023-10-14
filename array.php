<?php 
   $title = "Array and Printouts";
   include 'includes/header.php'
?>
   <h1><?php echo $title ?></h1>
   <?php
   // a variable
   $num = 3;

   // an array
   // only one data-type
   $numbers = array(1,2,3,4,5,6,7,8,9,10,150,40,15,80,19,200,101);
        echo $numbers[3];

        echo "<p>$numbers[7]</p>";

   $size = count($numbers);
         echo "<p>Array Numbers is size: $size</p>";

         for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
         }

        

    




   ?> 
<?php require 'includes/footer.php' ?>