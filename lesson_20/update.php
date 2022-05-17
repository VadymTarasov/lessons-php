<?php
require_once '../debug.php';
require_once 'ProductInMySQLRepository.php';
require_once '../vendor/autoload.php';

$id= $_GET['id'];

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);
$products = new \App\lesson_20\ProductInMySQLRepository();
$products = $products->getOneSQLProduct("$id");

echo $twig->render('update.html.twig',['products'=>$products]);

