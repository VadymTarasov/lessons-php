<?php

namespace App\lesson_20\task2;

interface ObserverInterface
{
    /**
     * Обновление состояния.
     *
     * @param SubjectInterface $subject Наблюдаемый объект.
     */
    public function update(SubjectInterface $subject): void;
}