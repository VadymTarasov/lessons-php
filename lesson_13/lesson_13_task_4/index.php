<?php
/**
 * 4. Необхідно дізнатися, що таке ValueObject і в чому його особливість.
 *
 * У продукту є 2 поля - назва (string) та ціна (Price) (Price теж потрібно створити)
 * Продукт можна створити лише з цими полями та повністю проініціалізованим.
 * Не повинно бути можливості створити продукт без будь-якого з двох обов'язкових параметрів.
 *
 * Має бути два методи/"конструктори":
 *
 * приймає як аргументи (string $title, Price $price)
 * приймає як аргументи масив з полями 'title' і 'price'
 */

use Price\Price;
use Products\Products;

require_once 'Price.php';
require_once 'Products.php';


echo "<pre>";
$test1 = new Products('title1', new Price(450));
echo $test1->title;
echo $test1->price;

echo "<br>";


$arr = ['title' => 'title2', 'price' => 10000];

$test2 = Products::getArray($arr);
echo $test2->title;
echo $test2->price;