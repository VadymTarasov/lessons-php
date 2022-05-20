<?php
namespace App\lesson_20\task2;


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

    public int $goodJob = 0;

    public int $badJob = 0;


    public function __construct()
    {

//        $this->mood = 3;
        $this->mood = mt_rand(1, 4);
        $this->observers = [];
        $this->goodMoods = [];
    }

    public function getMood()
    {
        echo "$this->mood  - ";
        if ($this->mood == 4 || $this->mood > 4 ) return "Хорошем настроении<br>";
        if ($this->mood == 3 ) return "Нормальном настроении<br>";
        if ($this->mood == 2 ) return "Плохом<br>";
        if ($this->mood == 1 || $this->mood < 1 ) return "Состояние «не попадись на глаза»<br>";

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
     * @param  int  $getJobJunior  работа джуна.
     */
    public function takeMood(int $getJobJunior): void
    {

        if ($getJobJunior > 0){
            $this->mood += 1;
        } else $this->mood -= 1;
        if ($getJobJunior == 1 ) $this->goodJob += 1;
        if ($getJobJunior == 0 ) $this->badJob += 1;
        if ($this->mood > 3 && $getJobJunior == 1) $this->mood = 4;
        if ($this->mood < 2 && $getJobJunior == 0) $this->mood = 1;
    }

}