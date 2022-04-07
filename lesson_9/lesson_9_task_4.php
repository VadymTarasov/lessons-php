<?php

/**
 * Напишите функцию, которая оставляет в массиве только уникальные значения
 */

echo "<pre>";

$arr = [
    "Задумка и сюжет",
    "Игра актеров",
    "Игра актеров",
    "Игра актеров",
    "Захватываемость",
    "Захватываемость",


];
//var_dump(array_unique($arr));

function del_duplicate(array $arr)
{
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {
        if (!in_array("$arr[$i]", $res)) {
            $res[] = $arr[$i];
        }
    }
    return ($res);
}

var_dump(del_duplicate($arr));

