<?php
/** Написать функцию которая принимает первым аргументом массив и выводит все его элементы.
 * Учтите что массив может быть многомерный
 */

$b = [
    "Задумка и сюжет" => 5,
    "Игра актеров" => 6,
    "Захватываемость" => 7,
    "Непредсказуемость" => 8,
];
function getElement($array)
{
    foreach ($array as $key => $v) {
        if (is_array($v)) {
            foreach ($v as $k => $value) {
                echo " $value \n";
            }
        } else {
            echo " $v \n";
        }
    }
}

getElement($b);