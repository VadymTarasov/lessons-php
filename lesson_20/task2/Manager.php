<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class Manager implements ObserverInterface
{

    public int $goodJob = 0;

    /**
     * @param SubjectInterface $subject
     * @return void
     */
    public function update(SubjectInterface $subject): void
    {
        foreach ((array)$subject as $k => $v) {
            foreach ((array)$v as $item => $value) {
                if (array_search(1, (array)$value)) $this->goodJob += 1;
            }
        }
        echo "<br>Менеджер посчитал что программиста похвалили " . "$this->goodJob" . " раз <br>";
    }
}