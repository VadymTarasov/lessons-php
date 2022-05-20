<?php

namespace App\lesson_20\task2;
require_once '../../debug.php';


class Manager implements ObserverInterface
{
    /**
     * @param SubjectInterface $subject
     * @return void
     */
    public function update(SubjectInterface $subject): void
    {
        foreach ($subject as $item => $value) {
            if ($item == 'goodJob') echo "<br>Менеджер посчитал что программиста похвалили $value раз<br>";
        }
    }
}