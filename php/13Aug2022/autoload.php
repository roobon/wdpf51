<?php 
    function my_autoloader($class) {
        include 'classes/' . $class . '.class.php';
    }
    spl_autoload_register('my_autoloader');


   $ev = new Events;

   //echo get_class($ev);

   $ev->name = "Get together";
    print_r($ev);

    echo class_exists("Patrons");

?>