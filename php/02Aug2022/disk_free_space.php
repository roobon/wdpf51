<?php 

    $directory = "C:";
    $bytes = disk_free_space($directory);
    $t_bytes = disk_total_space($directory);
    echo "Free Space: ".  round($bytes/1024/1024/1024,2) . "<br>";
    echo "Total Space: " . round($t_bytes/1024/1024/1024,2). "<br>";

?>