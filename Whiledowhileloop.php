<?php 
    $title = "while Loop";
    include 'includes/header.php'
?>
    <h1>While Loop</h1>
    <?php
    $grade = 0;
    // infinate loop
    // while($grade < 10){
    //   echo '<p>I AM LESS THAN 10!</p>';
   // }
//Pre-Condition Loop
   while($grade < 10){
    echo '<p>I AM LESS THAN 10!</p>';
    $grade++;
   }
    echo 'EXIT Loop!';

    ?>

    <h1>Do-While Loop</h1>
    <?php
    //Post-Condition Loop
        $grade = 0;
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;
        }while ($grade < 10);
        echo 'EXIT Loop!';
         
    ?>
<?php require 'includes/footer.php' ?>