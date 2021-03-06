<?php

/**
 * Написать функцию которая принимает два аргумента, первый массив а вторым значение для поиска.
 * В случае если значение было найдено возвращает его ключ иначе false.
 * пользоваться стандартной функцией для поиска в массиве нельзя. Учтите что массив может быть многомерный
 */

$seat = [
    "ряд 1" => [1, 2, 3, 4, 5,],
    "ряд 2" => [1, 2, 3, 4, 5, 6, 7,],
    "ряд 3" => [1, 2, 3, 4, 5, 6, 7, 8, 9],
    "ряд 4" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    "ряд 5" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
    "ряд 6" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
    "ряд 7" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]
];

$item = 9;
function my_search($array, $item)
{
    $result = [];
    foreach ($array as $k => $v) {
        if ($v == $item) {
            array_push($result, $k);
        }
        foreach ($v as $val => $val2) {
            if ($val2 == $item) {
                array_push($result, $val);
            }
        }
    }
    if (!empty($result)) {
        return $result;
    } else {
        return false;
    }
}

var_dump(my_search($seat, $item));

//вернёт первый найденый элемент
function search($array, $item)
{
    foreach ($array as $k => $v) {
        if ($v == $item) {
            $result = $k;
        } elseif ($result == null){
            foreach ($v as $val => $val2) {
                if ($val2 == $item) {
                    $result = $val;
                }
            }
        }
    }
    if ($result !== null) {
        return $result;
    } else {
        return false;
    }
}
var_dump(search($seat, $item));
