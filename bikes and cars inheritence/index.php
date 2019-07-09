<?php
require_once "Honda.php";
require_once "yamaha.php";

$Honda = new Honda("Honda 125", "Honda");
$yamaha = new Yamaha("YBR", "Yamaha", "125cc", "3");

echo "<pre>";
print_r($Honda);
echo "<br>";
print_r($yamaha);
echo "<hr>";
$Honda->moreInfo();
echo "<br>";
$yamaha->moreInfo();