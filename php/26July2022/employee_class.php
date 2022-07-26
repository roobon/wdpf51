<?php 
    class Employee {
        public $title = "Mr.";
        private $name;
        public const AGE = 20;

        public function getName(){
           return $this->name;
        }
        public function setName($x){
            $this->name = $x;
        }
        public function sayHello(){
            $msg = "{$this->name}, Welcome to OOP ";
            $msg .= SELF::AGE;
            echo $msg;
        }
    }
   $obj1 = new Employee;
   echo $obj1->title;
   $obj1->setName("Hasan");
   $obj1->sayHello();
   echo "<hr>";
   var_dump($obj1);



?>