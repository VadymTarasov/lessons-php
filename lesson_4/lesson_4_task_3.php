<?php

/*
Написать функцию которая проверяет является ли число простым или нет
(продвинутый уровень - использовать рекурсию)
*/

$n = 17;
$i = 2;


function recursion($n, $i)
{
    if ($n < 2) {
        echo 'чиcло меньше единицы' . '<br>';
        return;
    } else if ($n == 2) {
        return;
    } else if ($n % $i == 0) {
        echo 'не простое число' . '<br>';
        return;
    } else if ($i < $n / 2) {
        return recursion($n, $i + 1);
    } else {
        echo 'простое число' . '<br>';
        return;
    }
}

recursion($n, $i);




