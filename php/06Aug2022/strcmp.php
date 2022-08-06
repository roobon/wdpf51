<?php 

//     $str1 = "abcd12345678";
//     $str2 = "Abcd12345678";

//    echo strcmp($str1, $str2);

?>

<?php
 $pswd = "supersecret";
 $pswd2 = "supersecret2";
 if (strcmp($pswd, $pswd2) != 0) {
 echo "Passwords do not match!";
 } else {
 echo "Passwords match!";
 }
?>