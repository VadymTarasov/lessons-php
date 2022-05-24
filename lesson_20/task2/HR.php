<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class HR implements ObserverInterface
{

    public int $bedJob = 0;

    /**
     * @param SubjectInterface $subject
     * @return void
     */
    public function update(SubjectInterface $subject): void
    {
        foreach ((array)$subject as $k => $v) {
            foreach ((array)$v as $item => $value) {
                if (array_search(0, (array)$value)) $this->bedJob += 1;
            }
        }
        echo "<br>HR посчитал что, был вынесен выговор программисту " . "$this->bedJob" . " раз <br>";
    }
}