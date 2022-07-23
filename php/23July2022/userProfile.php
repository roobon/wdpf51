<?php 
    function userProfile(){
        $profile = array("Golam Rabbany", "Round 51", "WDPF");
        return $profile;
    }

    $x = userProfile();
    echo "<pre>";
    var_dump($x);

    list($name, $round, $course) = $x;

    echo $name;

?>