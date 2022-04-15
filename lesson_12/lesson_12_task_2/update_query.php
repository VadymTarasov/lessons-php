<?php
echo "<pre>";
require_once 'connect_db.php';
$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$season = $_POST["season"];

mysqli_query($link, "UPDATE `lessons`.`products` SET `name` = '$name', `price` = '$price', `season` = '$season' WHERE (`id` = '$id');");

header('Location: /lesson_12/lesson_12_task_2/index.php');


