<?php
require_once "Person.php";
require_once "Student.php";

$hashir = new Student("Hashir Butt", 22, "Pindi", "4th year", "15");
//$naveed = new Person("Naveed", 30, "RYK");

echo "<pre>";
$hashir->printYourName();

print_r($hashir);
echo "<br>";
echo "<br>";
echo "<br>";
//print_r($naveed);