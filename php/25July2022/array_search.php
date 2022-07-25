<?php 
    $divisions = array("Dhaka"=>"Buriganga", "Sylhet"=>"Surma", "Khulna"=>"Rupsha");

    $numbers = range(50,100);

    echo array_search("Surma", $divisions);
    echo "<br>";
    echo array_search(60, $numbers);

?>