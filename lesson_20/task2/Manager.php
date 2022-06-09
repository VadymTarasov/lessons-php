<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class Manager implements ObserverInterface
{
    public int $countPraise = 0;

    public function countGoodWork($subject): void
    {
        foreach ((array)$subject as $k => $v) {
            foreach ($v as $item => $value){
                if ($value == 5){
                    $this->countPraise += 1;
                }
            }
        }
    }

    public function showResult(): string
    {
        return "Менеджер посчитал что программиста похвалили " . $this->countPraise . " раз";
    }

    public function update(SubjectInterface $subject): void
    {
        $this->countGoodWork($subject);
    }

}