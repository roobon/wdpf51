<?php
class Employee {
 public static $favSport = "Football";
 public static function watchTV()
 {
 echo "Watching ".self::$favSport;
 }
}
class Executive extends Employee {
 public static $favSport = "Polo";
}

echo Employee::$favSport;
echo "<br>";
echo Executive::$favSport;
echo "<hr>";

echo Employee::watchTV();
echo "<br>";
echo Executive::watchTV();




?>