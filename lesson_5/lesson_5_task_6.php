<?php


/*
написать функцию которая на вход примниает два аргумента - строки(отрывки из текста)
и сравнивает % совпадения. Если строки идентичны - 100%
*/
function similar($text1, $text2) {
    similar_text($text1,$text2,$percent);
    echo $percent .' % совпадения';
    }

$text1='текст любой';
$text2='текст для сравнения';
 
similar($text1,$text2);



