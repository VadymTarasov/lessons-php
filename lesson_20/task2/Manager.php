<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class Manager implements ObserverInterface
{
    public int $countPraise;

    public function countBadWork($subject): void
    {
        foreach ((array)$subject as $k => $v) {
            if ($k == 'praise') {
                $this->countPraise = count($v);
            }

        }
    }

    public function showResult(): string
    {
        return "Менеджер посчитал что программиста похвалили " . $this->countPraise . " раз";
    }

    public function update(SubjectInterface $subject): void
    {
        $this->countBadWork($subject);
    }

}