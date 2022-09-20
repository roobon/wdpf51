<?php 

if($_GET['mydata']=='good') {
    $good = array("Rabbany", "Dipu", "Tokey");
    echo getData($good);
} else if ($_GET['mydata']=='bad'){
    $bad = array("Ahmed", "Alam", "Mahbub");
    echo getData($bad);
}

function getData($items){
    $output = "<ul>";
    for($i=0; $i<count($items); $i++){
        $output .= "<li>" . $items[$i] . "</li>";
    }
    $output .= "</ul>";
    return $output;
}
?>