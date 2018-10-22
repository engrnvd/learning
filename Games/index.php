<?php

require_once "IGI.php";
require_once "Battlefield.php";

$igi = new Igi("Action","Eidos Interactive");
$battle = new BattleField("Action","Electronic Arts(EA)","Very Impressive","Very Good");

echo "<pre>";
print_r($igi);
echo "<br>";
print_r($battle);