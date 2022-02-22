<?php
/**
 * Основывая на #4 задании написать ту же функцию но тепреь она работает рекурсивно
 */


$rating = [
    "Задумка и сюжет" => 5,
    "Игра актеров" => 6,
    "Захватываемость" => 7,
    "Непредсказуемость" => 8
];
$item = 6;
function my_func($array, $item)
{
    foreach ($array as $k => $v) {
        if ($v === $item) {
            echo $k;
        } else if (is_array($v)) {
            foreach (my_func($v, $item) as $v2) {
                echo $v2;
            }
        }
    }
}
my_func($rating, $item);

