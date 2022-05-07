<?php

require_once 'Calculator.php';

use Calculator\Calculator;

header('Location: /lesson_13/lesson_13_task_3/index.php');

setcookie("firstNumberCookie", "{$_POST['firstNumber']}", time() + 10, '/');
setcookie("operatorsCookie", "{$_POST['operators']}", time() + 10, '/');
setcookie("secondNumber", "{$_POST['secondNumber']}", time() + 10, '/');
$f = $_POST['firstNumber'];
$o = $_POST['operators'];
$s = $_POST['secondNumber'];

$test1 = new Calculator("$f", "$o", "$s");
$res = $test1->getResult();
setcookie("resCookie", "$res", time() + 10, '/');

