<?php
/*
Написать функцию которая принимает число от 1 до 7 и возвращает день недели.
Если число не входит в заданый диапазон то возвращает сообщение об ошибке
*/


$a = 7;

function dayWeek($a){
    switch ($a) {
        case 1:
            return "Понедельник";
            break;
        case 2:
            return "Вторник";
            break;
        case 3:
            return "Среда";
            break;
        case 4:
            return "Четверг";
            break;
        case 5:
            return "Пятница";
            break;
        case 6:
            return "Суббота";
            break;
        case 7:
            return "Воскресенье";
            break;
        default:
            return "Ошибка";
    }
}

echo dayWeek($a);




