<?php
/*
Написать функцию которая принимает на первым аргументом строку, а вторым символ.
В случае если искомые символ присуствует в строке то заменить его встроке на такой же 
но в верхнем регистре
 */


function convertUp($string, $symbol){
    $symbolUp = strtoupper($symbol);
    $conver = str_replace($symbol, $symbolUp, $string);
    return ($conver);
}

echo convertUp("text", "x");

