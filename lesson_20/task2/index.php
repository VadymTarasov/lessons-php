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

$work1 = new Junior();
$TeamLeader->addObserver($work1);

$work2 = new Junior();
$TeamLeader->addObserver($work2);
$TeamLeader->removeObserver($work2);

$work5 = new Junior();
$TeamLeader->addObserver($work5);

$work6 = new Junior();
$TeamLeader->addObserver($work6);

$work7 = new Junior();
$TeamLeader->addObserver($work7);

$work8 = new Junior();
$TeamLeader->addObserver($work8);

echo "<br>";
$work3 = new Junior();
$TeamLeader->addObserver($work3);
$manager = new Manager();
$hr = new HR();

$TeamLeader->addObserver($manager);
$TeamLeader->addObserver($hr);

$TeamLeader->notifyObservers();

echo "<br>";

echo $TeamLeader->getMood();

