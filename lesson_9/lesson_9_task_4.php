<?php

/**
 * Напишите функцию, которая оставляет в массиве только уникальные значения
 */

echo "<pre>";

$arr = [
    "Задумка и сюжет",
    "Игра актеров",
    "Игра актеров",
    "Захватываемость",
];

function del_duplicate (array $arr)
{
    $b = array_count_values($arr);
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {
        foreach ($b as $key => $val) {
            if ($arr[$i] == $key && $val == 1) {
                $res[] = $arr[$i];
            }
        }
    }
    return ($res);
}

var_dump(del_duplicate($arr));

