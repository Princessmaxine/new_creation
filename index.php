<?php 
$title = "Index";
include 'includes/header.php'

?>
<! -- Basic HTML -- >
   <h1>Welcome to my Site</h1>
   <br/>
   <?php 

   echo 'Sit back, relax and enjoy'; 
   echo '<br/>';
   echo 'I trust that you will benefit from what this site has to offer';
   echo '<br/>';
 
   $name = 'Maxine Smith';
   $age = 45;
   $address = 'May Pen Drive';
   // echo variable
   echo $name;
   echo '<h1>My Name Is: '.$name.' </h1>';
   echo '<h1>My Age Is: '.$age.' </h1>';
   // Ech using double quotes and interpolation
   echo "<h1>My Address is: $address </h1>";
   ?>
   <button  type="button" class="btn btn-success">CLICK ME!</button>
   <button  type="button" class="btn btn-primary">CLICK ME!</button>
   <button  type="button" class="btn btn-secondary">CLICK ME!</button>
   <?php
 require 'includes/footer.php' 
 ?>