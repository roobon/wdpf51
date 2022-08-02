<?php 
    $file = "../PHP_Evidence_and_solutions_R51.docx";

    $bytes = filesize($file);
    $kb = round($bytes/1024,2);

    $filename = basename($file);

    echo "My file name is $filename and it's size is in byte $bytes and in Kilobytes $kb";


?>