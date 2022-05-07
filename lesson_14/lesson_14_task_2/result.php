<?php

use Db\Db;
use Game\Game;
require_once 'Db.php';
require_once 'Game.php';
session_start();

var_dump($_POST);

header('Location: /lesson_14/lesson_14_task_2/index.php');

if ($_POST['giveUp'])
{
    session_unset();
    session_destroy();
}

setcookie("giveUp", "{$_POST['giveUp']}", time() + 10, '/');

$userCity = Game::textCheck($_POST['userCity']);
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