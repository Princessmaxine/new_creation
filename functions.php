<?php 
    $title = "Functions";
    include 'includes/header.php'
    ?>
    <h1>Functions</h1>
    <?php
    /*Defining a function */

    function writeMessage(){
        echo "You are really good to me, I thank you for that! <br/>";
    }
    /* Calling a function */

    writeMessage();
    writeMessage();
    writeMessage();
    
     echo "<hr/>";
    
    writeMessage();

    /* Function with <parameters*/

    function addFunction ($num1, $num2){
        $sum = $num1 + $num2;
        echo "The sum Of $num1 and $num2 is: $sum <br/>";
    }
    function changeNum(&$num){
        $num = $num + 20;
        // $num+= 20;
    }

    function returnProduct($num1, $num2){
        $prod = $num1 * $num2; 
        return $prod;


    }


    $num = 300;
    addFunction(15, $num);
    addFunction('15', "50");
    addFunction (10, 20);

    changeNum($num);
    echo $num . "<br/>";
    
    $return_value = returnProduct(20, 300);
    echo $return_value . "<br/>";


    ?>
<?php require 'includes/footer.php' ?>