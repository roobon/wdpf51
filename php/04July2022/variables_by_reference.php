<?php 
    $value1 = "Hello";
    $value2 = &$value1;
    $value2 = "World";


    echo $value1; //Hello
    echo "<br>";
    echo $value2; //World

?>
