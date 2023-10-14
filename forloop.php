<?php 
    $title = "For Loop";
    include 'includes/header.php'
?>
    <h1>For Loop</h1>
    <?php
    for($count = 0; $count < 10; $count++){
        echo '<p>Good Morning</p>';
    }
    for ($count = 0; $count < 10; $count++){
        echo "<p> The Count is: $count</p>";
    }
  
    ?>
<?php require 'includes/footer.php' ?>