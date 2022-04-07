<?php

/**
 * Напишите функцию, которая принимает два параметра - входящий массив и размер исходных подмассивов.
 * Суть в том, что бы разделить один большой массив на несколько маленьких (заданного размера
*/
echo '<pre>';


$arr = [
    "Задумка и сюжет",
    "Игра актеров",
    "Игра актеров",
    "Захватываемость",

];
//var_dump(array_chunk($arr,2));


function divideArray(array $array, int $size)  {
    $newArr = [];
    for ($i = 0; $i < count($array)/$size; $i++) {
        $newArr[$i] = array_slice($array, $i*$size, $size);
    }return ($newArr);
}


var_dump(divideArray($arr, 2));
