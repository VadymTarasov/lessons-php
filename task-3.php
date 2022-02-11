<?php

/*
 Используя функцию rand() и switch case вывести
   - Если число равно 1, 2, 3 ,4, 5 - Odd
   - Если число равно 10, 20, 30, 40, 50 - Even
   - Иначе - Ooops
*/

$a = rand();

switch ($a) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Odd " . $a;
        break;
    case 10:
    case 20:
    case 30:
    case 40:
    case 50:
        echo "Even " . $a;
        break;
    default:
        echo "Ooops " . $a;
}

