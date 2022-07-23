<?php 
//     $numbers = array(5, 15, 20, 30);
//    echo $randnumber = rand(1,50);
//    echo "<br>"; 
//    echo in_array($randnumber, $numbers);

?>

<?php 
        $primes = array(2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
       
        for($i=1; $i<100; $i++){
            echo "<h3>$i Start</h3>";
            $randnumber = rand(1,50);
            if(in_array($randnumber, $primes)){
                echo "Found my prime number $randnumber";
                break;
            } else {
                echo "Not Found $randnumber in prime list";
            }
            echo "<br>End<hr>";
        }

?>