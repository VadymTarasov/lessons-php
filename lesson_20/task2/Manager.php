<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class Manager implements ObserverInterface
{
    public int $goodJob;

    public function countBadWork($subject): void
    {
        foreach ((array)$subject as $k => $v) {
            if ($k == 'countGoodJob') {
                $this->goodJob = count($v);
            }

        }
    }

    public function showResult(): string
    {
        return "Менеджер посчитал что программиста похвалили " . $this->goodJob . " раз";
    }

    public function update(SubjectInterface $subject): void
    {
        $this->countBadWork($subject);
    }

}