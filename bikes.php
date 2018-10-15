<?php
    class Bikes
    {
        public $bikeName;
        public $model;
        public $cc;
        public $company;


        public function __construct($bikeName, $model, $cc, $company)
        {
            $this->bikeName = $bikeName;
            $this->model = $model;
            $this->cc = $cc;
            $this->company = $company;
        }

        public function BikesInfo()
        {
            echo "This is the info of Bikes";
        }

        public function printBikeName()
        {
            echo "Name of the bike is $this->bikeName.";
        }
        public function newProperty($sitting)
        {
            echo "sitting capability => $sitting.";
        }


    }
$bike = new Bikes("Yamaha YBR", "2018", "125cc","Yamaha");
$bike-> BikesInfo();
echo "<pre>";
print_r($bike);
echo "<br>";
$bike->printBikeName();
echo "<br>";
$bike->newProperty("2 Persons");

$bike2 = new Bikes("Honda 125", "2017", "125cc", "Honda");
echo "<pre>";
print_r($bike2);
echo "<br>";
$bike2->newProperty("3 Persons");
