<?php 

    $path = "myfile.txt";
    
    echo $output = realpath($path); // realpath or full path
    echo "<br>";

    $path1 = "../27July2022/results.txt";

    echo realpath($path1);
    echo "<br>";

    $rabbany = "../../Rabbany.txt";

    echo realpath($rabbany);
    
   
    

?>