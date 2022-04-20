<?php
echo "<pre>";
require_once 'connect_db.php';
$id = $_GET['id'];

mysqli_query($link, "DELETE FROM `lessons`.`products` WHERE (`id` = '$id');");

header('Location: /lesson_12/lesson_12_task_2/index.php');


