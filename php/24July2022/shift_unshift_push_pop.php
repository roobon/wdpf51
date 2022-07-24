<?php
    $divisions = array("Dhaka", "Sylhet", "Khulna");
    echo "<pre>";
    print_r($divisions);

    array_unshift($divisions, "Rajshahi", "Chottogram");

    print_r($divisions);

    array_pop($divisions);
    echo "Applied Array_pop for remove from ending";
    print_r($divisions);
    
    array_shift($divisions);
    echo "Applied Array_shift for remove from beggining";
    print_r($divisions);

    array_push($divisions, "Barisal", "Rangpur");
    echo "Applied Array_push for add in to ending";
    print_r($divisions);

?>