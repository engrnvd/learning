<?php

class Person {
    public $name;
    public $age;
    public $address;

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