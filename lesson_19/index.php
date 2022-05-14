<?php

require_once '../debug.php';
require_once 'Task1.php';

use App\lesson_19\Task1;


echo phpinfo();
$arr = [1, 2, 3, 4, 5];

$res = Task1::getResultMultiplication($arr, 2);

$res2 = Task1::sumAllElements($arr);

$res3 = Task1::getMorNumber($arr, 3);

$res4 = Task1::sumNumbersRecursion(12345);
debug($res4);
