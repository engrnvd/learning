<?php
require_once "Skype.php";
require_once "Whatsapp.php";
require_once "imo.php";

$skype = new Skype("Yes","Yes");
$whatsapp = new Whatsapp("No", "Yes","Yes","Yes");
$imo = new Imo("No","Yes","Yes","Yes","Yes","Yes");

echo "<pre>";
print_r($skype);
echo "<br>";
print_r($whatsapp);
echo "<br>";
print_r($imo);
echo "<hr>";

$skype->xInfo();
echo "<br>";
$whatsapp->xInfo();
echo "<br>";
$imo->xInfo();