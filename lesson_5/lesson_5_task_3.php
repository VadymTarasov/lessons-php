<?php
/*
Написать функцию которая первым аргументом принимает символ(по умолчанию #) и число(по умолчанию 5)
 после чего рисует пирамиду следующего вида:
 #
 ##
 ###
 ####
 ##### 
Где второй аргумент это одновременно и количество рядов и количество печатаемых символов 
*/
function pyramid($symbol, $int) {
    for ($i = 1; $i <= $int; $i++)
    {
        for($x=0; $x<$i;  $x++){
        echo$symbol;
    }
echo'<br>';
}
}
echo pyramid("#", 5);

