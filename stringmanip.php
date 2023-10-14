<?php 
    $title = "String Manipulation";
    include 'includes/header.php'
?>
    <h1>PHP String Manipulation</h1>
    <?php
    $phrase1 = "The Student who came late";
    $phrase2 = " She stands with a rock, in the Classroom";
    $name = "maxine smith";
    echo $phrase1 .  ",  Her name is Tiffany," . $phrase2;
     echo '<br/>';

     echo '<hr/>';
     //string transformation
    echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
    echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
    echo 'Upper case: '. strtoupper($name). '<br/>';
    echo 'Lower casr: '. strtolower("THIS WAS ALL UPPER CASE").'<br/>';
    echo '<hr/>';

    echo 'Repeat String: ' . str_repeat('b', 8) . '<br/>';
    echo 'Repeat String: ' . str_repeat($name , 5) . '<br/>';
    echo 'Repeat String - Nested Functioms:' . strtoupper (str_repeat ('a' , 6)) . '<br/>';

    //sub-string (substr)
    echo 'Get a substring: ' . substr($name, 3, 6). '<br/>';

    echo 'Get position of string: ' . strpos($name, 'x'), '<br/<';

    // echo 'Get position of string: ' . strpos($combine, 'z'). '<br/>';

    echo 'Find Character "X": ' . strchr($name, 'S'). '<br/>';
    echo 'Find Character "i": ' . strchr($name, 'i'). '<br/>';
    echo 'Find Character "e": ' . strchr($name, 'e'). '<br/>';
    echo 'Find Character "n": ' . strchr($name, 'n'). '<br/>';

    // how to find the length of String 
    
    echo 'Find Lengrh of String: ' . strlen($name) . '<br/>';

    echo 'Without Trim: ' . "A" . " B C D " . "E" . '<br/>';
    echo 'Trim spaces on both sides: ' . "A" . trim( "B C D ") . "E" . '<br/>';
    echo 'Trim spaces to the left: '. "A" . ltrim( "B C D ") . "E" . '<br/>';
    echo 'Trim spaces to the fight: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

    echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2) . '<br/>';
    ?>
<?php require 'includes/footer.php' ?>