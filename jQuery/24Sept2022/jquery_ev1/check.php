<?php 
//include('dbconfig.php');

$db = new mysqli("localhost", "root", "", "wdpf51");

$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$pass = sha1($pass);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
    $result = $db->query($sql);

    if($result->num_rows ==1) {
        echo "<span class='green'>Valid User</span>";
    } else {
        echo "<span class='red'>Invalid User</span>";
    }



?>