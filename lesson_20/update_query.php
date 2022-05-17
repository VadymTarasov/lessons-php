<?php
require_once 'ProductInMySQLRepository.php';

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$season = $_POST["season"];

$update = new \App\lesson_20\ProductInMySQLRepository();
$update->updateSQLProduct("$id","$name","$price","$season");

header('Location: index.php');


