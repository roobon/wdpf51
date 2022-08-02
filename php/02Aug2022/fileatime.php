<?php 

ini_set("date.timezone", "Asia/Dhaka");

$file = "myfile.txt";

$time = fileatime($file);

echo date("h:i:s", $time);

?>