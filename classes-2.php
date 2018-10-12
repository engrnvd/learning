<?php

class Person {
    public $name;
    public $age;
    public $address;
    public $fatherName;

    public function __construct($n, $age, $address)
    {
        $this->name = $n;
        $this->age = $age;
        $this->address = $address;
    }

    public function sayHello()
    {
        echo "Hello people!<br>";
    }

    public function printYourName()
    {
        echo "My name is: {$this->name}<br>";
    }


}

$hashir = new Person("Hashir Butt", 22, "Pindi");

$naveed = new Person("Naveed", 30, "RYK");

echo "<pre>";
//echo $hashir->name;
//print_r($hashir);
//print_r($naveed);

//$naveed->sayHello();
//$hashir->sayHello();

$hashir->printYourName();
$naveed->printYourName();