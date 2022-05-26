<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class Manager implements ObserverInterface
{
    public array $goodJob = [];

    public function countGoodWork($subject): void
    {
        foreach ((array)$subject as $k => $v) {
            foreach ((array)$v as $item => $value) {
                if (array_search(1, (array)$value)) array_push($this->goodJob, $value);
            }
        }
        echo "<br>Менеджер посчитал что программиста похвалили " . count($this->goodJob) . " раз <br><br>";
    }

    public function update(SubjectInterface $subject): void
    {
        $this->countGoodWork($subject);
    }

}