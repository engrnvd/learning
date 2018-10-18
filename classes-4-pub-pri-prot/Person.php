<?php

class Person {
    public $name;
    protected $age;
    private $address;

    public function __construct($n, $age, $address)
    {
        $this->name = $n;
        $this->age = $age;
        $this->address = $address;
    }

    static function sayHello()
    {
        echo "Hello people!<br>";
    }

    public function printYourName()
    {
        echo "My name is: {$this->name}<br>";
    }

    public function printBirthYear()
    {
        echo "My Birth Year is: " . $this->calculateBirthYear();
    }

    private function calculateBirthYear()
    {
        $currentYear = date('Y');
        $birthYear = $currentYear - $this->age;
        return $birthYear;
    }
}