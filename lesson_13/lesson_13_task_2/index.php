<?php
/**
 * 2. Розробити структуру класів Figure-Rectangle-Square.
 * Виведіть на екран площу та периметри квадрату та прямокуника.
 */

use Figure\Figure;
use Rectangle\Rectangle;
use Square\Square;

require_once 'Figure.php';
require_once 'Rectangle.php';
require_once 'Square.php';

$test1 = new Figure(2, 4);
echo $test1->getFigure();
echo "<br>";
echo "<br>";


$test2 = new Rectangle(5, 5);
echo $test2->getFigure() . "<br>";
echo $test2->area() . "<br>";
echo "<br>";

$test3 = new Square(7, 7);
echo $test3->getFigure() . "<br>";
echo $test3->perimeter() . "<br>";
echo $test3->area() . "<br>";
