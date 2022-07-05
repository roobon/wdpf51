<?php 
    
    //$_REQUEST = $_POST OR $_GET
    print_r($_REQUEST);

    $email = $_REQUEST['em'];
    $pass = $_REQUEST['pw'];
    echo "You wanted to login with your email {$email} and password {$pass}";
    
    echo "<pre>";
    print_r($GLOBALS);

?>