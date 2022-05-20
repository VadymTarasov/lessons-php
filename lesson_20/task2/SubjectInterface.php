<?php

namespace App\lesson_20\task2;

/**
 * Интерфейс наблюдаемого объекта.
 */
interface SubjectInterface
{
    /**
     * Оповещение наблюдателей.
     */
    public function notifyObservers(): void;

    /**
     * Добавление наблюдателя.
     *
     * @param ObserverInterface $observer Наблюдатель.
     */
    public function addObserver(ObserverInterface $observer): void;

    /**
     * Удаление наблюдателя.
     *
     * @param ObserverInterface $observer Наблюдатель.
     */
    public function removeObserver(ObserverInterface $observer): void;
}