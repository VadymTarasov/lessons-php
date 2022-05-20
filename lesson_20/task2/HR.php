<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class HR implements ObserverInterface
{

    public function update(SubjectInterface $subject): void
    {
        foreach ($subject as $item => $value) {
            if ($item == 'badJob') echo "<br>HR посчитал что, был вынесен выговор программисту $value раз<br>";
        }

    }
}