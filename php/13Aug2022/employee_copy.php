<?php
class Employee {
 private $name;
 function setName($name) {
 $this->name = $name;
 }
 function getName() {
 return $this->name;
 }
}
$emp1 = new Employee();
$emp1->setName('Rabbany');
$emp2 = clone $emp1;
$emp2->setName('Tokey');

print_r($emp1);
echo "<br>";
print_r($emp2);