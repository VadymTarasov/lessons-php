<?php

namespace City;

class City
    /**
     * 1. Створити клас City. Описати 7 об’єктів та виведіть на екран для кожного міста назву і населення.
     */
{
    public string $cityName;

    /**
     * @param string $cityName
     */
    public function __construct(string $cityName)
    {
        $this->cityName = $cityName;
        echo $this->getPopulation($cityName);
    }

    public function getPopulation($cityName): string
    {
        return match ($cityName) {
            'Киев' => "$cityName - 2 797 553 чел.",
            'Харьков' => "$cityName - 1 430 885 чел.",
            'Днепропетровск' => "$cityName - 1 032 822 чел.",
            'Донецк' => "$cityName - 1 024 700 чел.",
            'Одесса' => "$cityName - 1 001 558 чел.",
            'Львов' => "$cityName - 717 803 чел.",
            'Кривой Рог' => "$cityName - 652 380 чел.",
            default => "$cityName - города нет в списке",
        };

    }
}

$city1 = new City('Киев');
$city2 = new City('Харьков');
$city3 = new City('Днепропетровск');
$city4 = new City('Донецк');
$city5 = new City('Одесса');
$city6 = new City('Львов');
$city7 = new City('Кривой Рог');
$city8 = new City('Николаев');

