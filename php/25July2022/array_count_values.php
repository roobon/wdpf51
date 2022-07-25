<?php 

$cities = ["Dhaka", "Khulna", "Khulna", "Dhaka", "Rangpur", "Bogura"];
$cityFrequency = array_count_values($cities);

echo "<pre>";
print_r($cityFrequency);
?>