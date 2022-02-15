<?php
/*
Написать функцию которая рекурсивно выводит все делители переданого числа
(для 21 это 7 и 3)
*/

$n = 21;
$k = 2;
    function recursion(int $n, int $k) {
        if ($n % $k == 0) {
            echo $k . '<br>';
            recursion($n / $k, $k);
        } 
        else {
            recursion($n, ++$k);
        }
    }
    
        recursion($n, $k); 

?> 