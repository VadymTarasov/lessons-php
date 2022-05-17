<?php
require_once 'ProductInMySQLRepository.php';
$name = $_POST["name"];
$price = $_POST["price"];
$season = $_POST["season"];

$create = new \App\lesson_20\ProductInMySQLRepository();
$create->createProduct("$name","$price","$season");


header('Location: index.php');


