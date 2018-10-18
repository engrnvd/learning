<?php

class Student extends Person {
    public $rollNumber;
    public $class;

    public function __construct($n, $age, $address, $class, $rollNumber)
    {
        parent::__construct($n, $age, $address);

//        echo "Name: {$this->name}<br>";
//        echo "Age: {$this->age}<br>";
//        echo "Address: {$this->address}<br>";

        $this->class = $class;
        $this->rollNumber = $rollNumber;
    }
}