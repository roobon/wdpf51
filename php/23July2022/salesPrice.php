<?php 
//     function salesPrice($cost, $trans){
//        $total = $cost + ($cost * $trans/100);
//        return $total;
//     }
    
//     $x = 500;
//     $y = 15;

//    echo  salesPrice($x, $y);

?>

<?php 
    function salesPrice($cost, $trans=5){
       $total = $cost + ($cost * $trans/100);
       return $total;
    }
    
    $x = 500;
    $y = 15;

   echo  salesPrice($x, $y);

?>