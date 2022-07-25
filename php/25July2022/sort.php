<?php 
$cities = ["Dhaka", "Khulna", "Rajshahi", "Pabna", "Rangpur", "Bogura"];
echo "<pre>";
print_r($cities);

sort($cities);
print_r($cities);

$numbers =  [5, 15, 28, 100, 7, 24, 357];
sort($numbers);
print_r($numbers);

$divisions = array( "Sylhet"=>"Surma", "Khulna"=>"Rupsha", "Dhaka"=>"Buriganga");
sort($divisions);
print_r($divisions);

?>