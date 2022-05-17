<?php
require_once '../debug.php';
require_once 'ProductInMySQLRepository.php';
require_once '../vendor/autoload.php';

//1. Перевести на twig сторінку зі списком товарів и додаванням товарів

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader);
$products = new \App\lesson_20\ProductInMySQLRepository();
$products = $products->getAllProducts();

echo $twig->render('products.html.twig',['products'=>$products]);
