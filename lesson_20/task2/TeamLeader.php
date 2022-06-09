<?php

namespace App\lesson_20\task2;
require_once 'Junior.php';


final class TeamLeader implements SubjectInterface
{

    /**
     * @var ObserverInterface[] $observers Наблюдатели.
     */
    private array $observers;
    /**
     * @var int $mood Настроение.
     */
    public int $mood;

    public array $allMood = [];

    public function __construct()
    {

//        $this->mood = 2;
        $this->mood = mt_rand(1, 4);
        $this->observers = [];
    }

    public function getMood()
    {
        echo "$this->mood  - ";
        if ($this->mood == 4) return "Хорошем настроении<br>";
        if ($this->mood == 3) return "Нормальном настроении<br>";
        if ($this->mood == 2) return "Плохом<br>";
        if ($this->mood == 1) return "Состояние «не попадись на глаза»<br>";

    }

    public function addObserver(ObserverInterface $observer): void
    {
        array_push($this->observers, $observer);
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        foreach ($this->observers as $key => $value) {
            if ($value == $observer) {
                unset($this->observers[$key]);
                return;
            }
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }

    /**
     * @param int $getJobJunior работа джуна.
     */

    public function checkWorkJunior(int $getJobJunior): void
    {
        if ($getJobJunior == 1) {
            $this->mood += 1;
            $this->allMood[] = $this->mood;
            if ($this->mood > 4) {
                $this->mood = 4;
            }
            echo 'Джун работает хорошо. ' . $this->getMood();
        }
        if ($getJobJunior == 0) {
            $this->mood -= 1;
            $this->allMood[] = $this->mood;
            if ($this->mood < 1) {
                $this->mood = 1;
            }
            echo 'Джун работает плохо. ' . $this->getMood();
        }
    }
}