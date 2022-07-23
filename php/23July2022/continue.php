<?php 

    $students = array("Dipu", "Naimur", "Anamul", 
    "Aklima", "Rabbany");

   //echo count($students);
    for($i=0;$i<count($students); $i++){
        if($students[$i]=="Anamul") { continue;}
        
       echo $students[$i] . "<br>";
    }


?> 