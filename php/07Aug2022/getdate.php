<?php 

    $time =  time();

   $result =  getdate(1650065011);
    echo "<pre>";
   //print_r($result);

   echo "Today's day is " . $result['mday'] . " Month is " . $result['month'] . "<br>";

   echo date("Y-m-d h:m:s a", 1650065011);


?>