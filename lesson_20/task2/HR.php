<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class HR implements ObserverInterface
{
    public int $badJob;

    public function countBadWork($subject): void
    {
        foreach ((array)$subject as $k => $v) {
            if ($k == 'countBadJob') {
                $this->badJob = count($v);
            }
        }
    }


    public function showResult(): string
    {
        return "HR посчитал что, был вынесен выговор программисту " . $this->badJob . " раз";
    }

    public function update(SubjectInterface $subject): void
    {
        $this->countBadWork($subject);
    }
}