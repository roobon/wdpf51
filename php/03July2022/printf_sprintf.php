<?php 
    $distance = 200;
    $place = "Padma Bride";

    printf("Dhaka to %s is total %d km", $place, $distance);
    echo "<br>";
?>

<?php 
    $meal = "Bakorkhani";
    $price = 180.54677;

    printf("Today's %s price is Taka%.2f", $meal, $price);
    echo "<br>";
    printf("Today's %s price is Taka%f", $meal, $price);
    echo "<br>";
    // $cost = sprintf("$%.2f", 43.2); // $cost = $43.20
    //  echo $cost;

    $output = sprintf("Today's %s price is Taka%.2f", $meal, $price);
    echo $output;

?>