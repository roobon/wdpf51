<?php 
    class Teacher {
        public $name;
        public $age;
        public $qualification;

        function teach(){

        }
        function assignment(){

        }
    }

    class Student {

    }

    $st = new Student();

    if($st instanceof Student){
        echo "Yes";
    } else {
        echo "No";
    }

    echo class_exists("Teacher");
    echo "<br>";

    echo get_class($st);
    echo "<br>";
    $methods = get_class_methods("Teacher");
    print_r($methods);
    echo "<br>";
    $vars = get_class_vars("Teacher");
    print_r($vars);


?>