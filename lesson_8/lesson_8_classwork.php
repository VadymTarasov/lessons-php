<?php


//1 Написать функцию которая вернет все элементы массива
// значение которых больше указанного аргумента

$data = [1, 2, 3, 4, 5];
$num = 4;

function moreThan(array $data, $num)
{
    $arr = [];
    foreach ($data as $key => $value) {
        if ($value > $num) {
            array_push($arr, $value);
        }
    }
    var_dump($arr);
//    return $arr;
}

moreThan($data, $num);
echo '<br>';
// 2 . Написать функцию которая считает сумму четных элементов массива,
// который передается в аргументы функции.

$data = [1, 2, 3, 4, 5, 6, 7, 8];
function even(array $data)
{
    foreach ($data as $key => $value) {
        if (is_int($value / 2)) {
            $res += 1;
        }
    }
    return $res;
}

echo even($data);

echo '<br>';


// 3 Написать функцию которой передается индекс в массиве и количество
// элементов которое необходимо вернуть начиная с этого индекса

$data = [1, 2, 3, 4, 5, 6];


//    return array_slice($data, $index, $length);
function getDataAfterIndex(array $data, int $index, int $length) {
    $arr =[];
    $a = $index + $length;
    for ($i = $index, $count = count($data); $i < $count; $i++){
        if ($i < $a) {
            $arr[] = $data[$i];

        }
    }
    return $arr;

}


var_dump(getDataAfterIndex($data, 1, 3));
