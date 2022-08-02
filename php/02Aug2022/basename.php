<?php 

    $path = "I:\xampp811\htdocs\wdpf51\php\02Aug2022\myfile.txt";
    
    $output = basename($path, ".txt");
    $output1 = basename($path);
    echo $output; //without extension
    echo $output1; // with extension

?>