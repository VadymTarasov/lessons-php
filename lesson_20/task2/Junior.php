<?php

namespace App\lesson_20\task2;

final class Junior implements ObserverInterface
{
    /**
     * @var int $getJobJunior работа джуна.
     */
    public int $getJobJunior;

    /**
     * @return void
     */

    public function resultJuniorWork(): void
    {
        if ($this->getJobJunior < 1) {
            echo "<b>джун работает плохо </b><br>";
        } else
            echo "<b>джун работает хорошо</b> <br>";
    }

    /**
     * @param SubjectInterface $subject
     * @return void
     */
    public function update(SubjectInterface $subject): void
    {
        $this->getJobJunior = mt_rand(0, 1);
        $subject->takeMood($this->getJobJunior);
        echo $this->resultJuniorWork() . "<br>";
        echo $subject->getMood() . "<br>";
    }
}