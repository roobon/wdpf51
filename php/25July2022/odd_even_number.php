<?php 
    $numbers = array(5, 9, 12, 23, 29, 34);

    foreach($numbers as $num){
        if($num%2==0){
            echo "$num is an even number<br>";
        } else {
            echo "$num is an odd number<br>";
        }
    }

?>