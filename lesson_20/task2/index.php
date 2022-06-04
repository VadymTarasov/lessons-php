<?php
namespace App\lesson_20\task2;
require_once '../../debug.php';
require_once 'SubjectInterface.php';
require_once 'ObserverInterface.php';
require_once 'Manager.php';
require_once 'HR.php';
require_once 'Junior.php';
require_once 'TeamLeader.php';

echo "<pre>";
$TeamLeader = new TeamLeader();
echo $TeamLeader->getMood();
echo "<br>";
$manager = new Manager();
$hr = new HR();

$TeamLeader->addObserver($manager);
$TeamLeader->addObserver($hr);

$TeamLeader->checkWorkJunior(Junior::resultJunWork());
$TeamLeader->checkWorkJunior(Junior::resultJunWork());
$TeamLeader->checkWorkJunior(Junior::resultJunWork());

$TeamLeader->notifyObservers();
echo "<br>";
echo $manager->showResult();
echo "<br>";
echo $hr->showResult();

