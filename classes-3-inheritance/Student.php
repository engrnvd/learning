<?php

class Student extends Person {
    public $rollNumber;
    public $class;

    public function __construct($n, $age, $address, $class, $rollNumber)
    {
        parent::__construct($n, $age, $address);

        $this->class = $class;
        $this->rollNumber = $rollNumber;
    }
}