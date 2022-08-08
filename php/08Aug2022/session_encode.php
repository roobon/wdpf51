<?php 

session_start();
// Set a few session variables.
// $_SESSION['user'] = "Tokey";
// $_SESSION['login'] = date("M d Y H:i:s");
// $_SESSION['age'] = 25;
// Encode all session data into a single string and return the result


$Vars = session_encode();
echo $Vars;
session_decode($Vars);
print_r($_SESSION);
// session_unset();
?>