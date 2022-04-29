<?php

use Db\Db;
use Game\Game;
require_once 'Db.php';
require_once 'Game.php';
session_start();

header('Location: /lesson_14/lesson_14_task_2/index.php');


$userCity = Game::textCheck($_POST['userCity']);
var_dump($userCity);
$test2 = new Db();
$cityAllName = $test2->getAllCities();
$test = new Game($cityAllName, $userCity);
$gameCity = $test->getAnswer();
$_SESSION['allGameCity'] .= $gameCity . " -> ";
$_SESSION['gameCity'] = $gameCity;
if (substr_count($_SESSION['allGameCity'], $_POST['userCity']) > 1) {
    $copyCity = "Такой город $userCity уже был! Вы проиграли";
    $_SESSION['copyCity'] = $copyCity;
}

/*

//нужно сделать проверку на букву

$mas_ot1 = ['ё','ъ','ь','.',')','ы',':',';','"','\''];

$firstLetter = mb_strtoupper(mb_strimwidth($userCity,0,1));
echo $firstLetter . " первая буква";
echo "<br>";

$lastLetter = mb_strtoupper(mb_substr($test->getAnswer(),-1));
echo $lastLetter . " последняя буква";
echo "<br>";

if ($lastLetter == $firstLetter) {
    echo $bluff = " = ";
} else {
    echo $bluff = " != ";
}
*/