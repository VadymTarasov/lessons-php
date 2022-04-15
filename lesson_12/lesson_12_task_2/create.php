<?php
echo "<pre>";
require_once 'connect_db.php';
$name = $_POST["name"];
$price = $_POST["price"];
$season = $_POST["season"];

mysqli_query($link, "INSERT INTO `lessons`.`products` (`name`, `price`, `season`) VALUES ('$name', '$price', '$season')");

header('Location: /lesson_12/lesson_12_task_2/index.php');


