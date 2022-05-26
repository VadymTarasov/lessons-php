<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class HR implements ObserverInterface
{
    public array $bedJob = [];

    public function countBadWork($subject)
    {
        foreach ((array)$subject as $k => $v) {
            foreach ((array)$v as $item => $value) {
                if (array_search(0, (array)$value)) array_push($this->bedJob, $value);
            }
        }
        echo "<br>HR посчитал что, был вынесен выговор программисту " . count($this->bedJob) . " раз <br><br>";

    }

    public function update(SubjectInterface $subject): void
    {
        $this->countBadWork($subject);
    }
}