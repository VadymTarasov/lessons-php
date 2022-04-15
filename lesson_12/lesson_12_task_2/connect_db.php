<?php
$servername = "localhost";
$database = "lessons";
$username = "root";
$password = "";




$link = mysqli_connect($servername, $username, $password, $database);

$products = mysqli_query($link, "SELECT * FROM products", MYSQLI_USE_RESULT);
$products = mysqli_fetch_all($products);
