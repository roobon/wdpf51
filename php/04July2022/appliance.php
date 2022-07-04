<?php
    class Appliance {
        protected $age;
        public $name;

        public function setDetails($age, $name){
            $this->age = $age;
            $this->name = $name;
        }
    }
   $fridge =  new Appliance();
   $fridge->setDetails(10, "Singer");
   //echo $fridge->age;
   var_dump($fridge);
?>