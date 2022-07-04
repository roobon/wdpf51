<?php 

$number = 100;
$string =  "Hello World";

echo gettype($number);
echo "<br>";
echo gettype($string);
echo "<br>";
echo is_integer($string);
echo "<br>";
echo "Integer: ". is_int($number);
echo "<br>";
$yes = false;
echo "Boolean: ".  is_bool($yes);
echo "<br>";
$numbers = [10, 15, 20];
echo "Scalar: ".  is_scalar($string);



?>