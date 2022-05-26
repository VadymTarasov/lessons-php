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

$jun  = new Junior();
$manager = new Manager();
$hr = new HR();

$TeamLeader->addObserver($jun);
$TeamLeader->addObserver($manager);
$TeamLeader->addObserver($hr);

$TeamLeader->notifyObservers();
$TeamLeader->notifyObservers();

