<?php 

$cities = ["Dhaka", "Khulna", "Rajshahi", "Pabna", "Rangpur", "Bogura"];
echo "<pre>";
print_r($cities);

$result = array_flip($cities);
print_r($result);

?>