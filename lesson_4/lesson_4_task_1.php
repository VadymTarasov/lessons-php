<?php
/*
Написать функция которая принимает три целых числа и возвращает большее из них,
если числа равны то любое из них
*/

$a = 1;
$b = 7;
$c = 5;

function maxInt(int $a, int $b, int $c) 
{ if ($a > $b && $a > $c) {
    return $a;
    } elseif ($b > $c && $b > $a) {
    return $b;
    } elseif ($c > $a && $c > $b) {
    return $c;
    } elseif ($a == $b && $a == $c) {
    return ($a);
    } elseif ($b == $c) {
    return ($b);
    }
   }

echo maxInt($a, $b, $c) ;





