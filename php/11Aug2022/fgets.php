<?php
$file = fopen("test.txt","r");

echo filesize('test.txt');
  echo fgets($file, 80). "<br />";

fclose($file);
?>