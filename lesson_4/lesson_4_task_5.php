<?php
/*
На перед Написать функуию которая возвращает все делители числа
(нужно будет использовтаь массив)
*/

$x = 21;
$i = 2;

function getDivisors($x, $i) 
{
    $dividers = [];
    for($i; $i <= $x; $i++) 
    {
        if($i == $x) return $dividers;
        if($x % $i == 0)
        {
            $dividers[] = $i;
        }
    }
}
var_dump (getDivisors($x, $i));

?> 