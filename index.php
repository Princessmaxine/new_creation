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
   echo '<hi>My Name Is: '.$name.' </h1>';
   echo '<br/>';
   echo '<hi>My Age Is: '.$age.' </h1>';
   ?>
   <button  type="button" class="btn btn-success">CLICK ME!</button>
   <?php
 require 'includes/footer.php' 
 ?>