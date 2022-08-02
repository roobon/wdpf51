<?php 

    $path = "I:\xampp811\htdocs\wdpf51\php\02Aug2022\myfile.txt";
    
    $output = pathinfo($path); // will return an array
    
    echo "<pre>";
    //print_r($output); 

    echo $output['dirname'];
    echo "<br>";
    echo $output['basename'];
    echo "<br>";
    echo $output['filename'];
    echo "<br>";
    echo  $output['extension'];
    

?>