<?php
require_once "Db table.php";
require_once "Subject.php";
require_once "Page.php";
require_once "User.php";

echo "<pre>";
$subjects = Page::findAll();
print_r($subjects);
echo "<br>";
echo "<hr>";
$pages = Admin::findAll();
print_r($pages);
