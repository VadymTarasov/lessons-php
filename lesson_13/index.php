<?php
/**
 * Створити файли (та відповідні класи в них) Cat.php, Dog.php - у цих класах повинні бути метод say()
 * - яка у відповідних класах буте коректно повертати строку "гав"/"мяу".
 * У файлі index.php підключити ці файли з класами, створити об'єкти цих класів та визвати ці методи.
 */

require_once 'Dog.php';
require_once 'Cat.php';

$dog = new Dog\Dog();
echo $dog->say();
echo $dog->name;
echo $dog->age;

echo "<br>";

$cat = new Cat\Cat('Том', 3);
echo $cat->say();
echo $cat->name;
echo $cat->age;
