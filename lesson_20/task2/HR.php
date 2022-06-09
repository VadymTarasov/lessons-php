<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class HR implements ObserverInterface
{
    public int $countRebuke = 0;

    public function countBadWork($subject): void
    {
        foreach ((array)$subject as $k => $v) {
            foreach ($v as $item => $value){
                if ($value == 0){
                    $this->countRebuke += 1;
                }
            }
        }
    }

    public function showResult(): string
    {
        return "HR посчитал что, был вынесен выговор программисту " . $this->countRebuke . " раз";
    }

    public function update(SubjectInterface $subject): void
    {
        $this->countBadWork($subject);
    }
}