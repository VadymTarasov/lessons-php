<?php
require_once 'ProductInMySQLRepository.php';
$id = $_GET["id"];

$delete = new \App\lesson_20\ProductInMySQLRepository();
$delete->deleteSQLProduct("$id");


header('Location: index.php');