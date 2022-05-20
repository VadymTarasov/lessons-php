<?php

namespace App\lesson_20\task2;

final class Junior implements ObserverInterface
{
    /**
     * @var int $getJobJunior работа джуна.
     */
    public int $getJobJunior;

    public function __construct()

    {
        $this->getJobJunior = mt_rand(0, 1);
    }

    /**
     * @return int
     */
    public function getGetJobJunior(): int
    {
        return $this->getJobJunior = mt_rand(0, 1);
    }

    /**
     * @return void
     */

    public function resultJuniorWork(): void
    {
        if ($this->getJobJunior < 1) {
            echo "джун работает плохо    ";
        } else
            echo "джун работает хорошо   ";
    }

    /**
     * @param SubjectInterface $subject
     * @return void
     */
    public function update(SubjectInterface $subject): void
    {
        $subject->takeMood($this->getJobJunior);

        echo $this->resultJuniorWork() . "<br>";
    }
}