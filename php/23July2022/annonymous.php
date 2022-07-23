<?php 
    $x = 15;

    $abc = function(){
        //$x = 10;
        //global $x;
        $x += 100;
        echo $x . "<br>";
    };

    $abc();

    echo $x;


?>