<?php 
    $numbers = range(1,10);
    echo "<pre>";
    print_r($numbers);
    $numbers = range(0,10,2); //even numbers
    print_r($numbers);
    $numbers = range(1,10,2); //odd numbers
    print_r($numbers);
    $letters = range("A", "Z"); // capital letters
    print_r($letters);
    $letters = range("a", "z"); // small letters
    print_r($letters);

?>