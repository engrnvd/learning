<?php

class Person {
    public $name;
    public $age;
    public $address;

    public function sayHello()
    {
        echo "Hello people!<br>";
    }
}

$hashir = new Person();
$hashir->name = "Hashir Butt";

$naveed = new Person();
$naveed->name = "Naveed";
$naveed->age = 30;

echo "<pre>";
//echo $hashir->name;
print_r($hashir);
print_r($naveed);

$naveed->sayHello();
$hashir->sayHello();