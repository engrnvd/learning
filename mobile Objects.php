<?php

class Mobile
{
    public $companyName;
    public $model;
    public $price;

    public function information()
    {
        echo "These are some specs of mobiles.";
    }

}

$mobile = new Mobile();
$mobile->companyName = "Huawei";
$mobile->model = "p8 lite";
$mobile->price = "20 Thousands";
echo "<pre>";
print_r($mobile);