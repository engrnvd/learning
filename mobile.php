<?php

class Mobiles
{
    public $mobileName;
    public $model;
    public $companyName;
    public $price;
    public $releaseDate;

    public function __construct($mobileName, $model, $companyName, $price, $releaseDate)
    {
        $this->mobileName = $mobileName;
        $this->model = $model;
        $this->companyName = $companyName;
        $this->price = $price;
        $this->releaseDate = $releaseDate;
    }


    public function mobileInfo()
    {
        echo "This is the info for mobiles.";
    }

    public function printMobileName()
    {
        echo "Name of mobile is $this->mobileName.";
    }

}

$mobile = new Mobiles("Huawei p8", "Lite", "Huawei", "21000", "10/09/2014");
$mobile->mobileInfo();
echo "<pre>";
print_r($mobile);
echo "<br>";
$mobile->printMobileName();

$mobile2 = new Mobiles("Huawei Mate10", "Lite", "Huawei", "27000", "02/06/2016");
echo "<pre>";
print_r($mobile2);
echo "<br>";
$mobile2->printMobileName();

?>