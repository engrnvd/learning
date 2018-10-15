<?php
    class Cars {
        public $carName;
        public $company;
        public $technology;

        public function __construct($carName, $company, $technology)
     {
         $this->carName = $carName;
         $this->comapny = $company;
         $this->technology = $technology;
     }


        public function printYourCarName()
    {
            echo "My car name is: '{$this->carName}'.";
    }

        public function carInfo()
        {
            echo "These are cars.";
        }

        public function  printNewCar($newCar)
        {
            echo "Name of my new car is {$newCar} ";
        }
    }

$car = new cars("Civic", "Honda", "1.8");
$car->carInfo();
echo "<pre>";
print_r($car);
$car -> printYourCarName();
echo "<br>";
$car->printNewCar("Toyota Aqua");
echo "<br>";
$car2 = new cars("Toyota GLI", "Toyota", "1.5");
echo "<br>";
print_r($car2);
$car2->printYourCarName();
echo "<br>";
$car2->printNewCar("Toyota Vitz");
?>