<?php
    //date_default_timezone_set("Asia/Singapore");

    ini_set("date.timezone", "Asia/Singapore");
    
    echo date_default_timezone_get();

    echo "<br>";

    echo date("d-m-Y H:i:s a")
?>