<?php 

    $file =  "mytextfile.txt";
    $fh = fopen($file, "r");
    //print_r($fh);
    //echo fgets($fh);
    while(!feof($fh)){
        echo fgets($fh). "<br>";
    }

    fclose($fh);
?>
<hr>
<?php 
    $file =  "mytextfile.txt";
    $fh = file($file);

    print_r($fh);   
?>