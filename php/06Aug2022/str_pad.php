<?php 
    $amount = 500.00;

    $output = str_pad($amount, 10 , "0", STR_PAD_LEFT);

    echo $output . "<br>";
    
    $string = "Bangladesh";

    echo str_pad($string, 21, "#=", STR_PAD_BOTH);
?>