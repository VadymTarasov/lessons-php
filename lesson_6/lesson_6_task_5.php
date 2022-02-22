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
function my_search($array, $item)
{
    $result = [];
    foreach ($array as $k => $v) {
        if ($v == $item) {
            array_push($result, $k);
        }
        else if (is_array($v)) {
            foreach (my_search($v, $item) as $val) {
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
var_dump(my_search($rating, $item));

