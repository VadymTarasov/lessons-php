<?php
/*
Написать в виде массивов список
а) Название фильмов по звездным войнам,
б) места в кинотеатре,
в) список оценок по предметам(предметы выбирайте сами)
*/

$movName = ["Звёздные войны: Новая надежда (1977)", "Звёздные войны: Империя наносит ответный удар (1980)",
    "Звёздные войны: Возвращение джедая (1983)", "Звёздные войны: Скрытая угроза (1999)", "Звёздные войны: Атака клонов (2002)",
    "Звёздные войны: Месть ситхов (2005)", "Звёздные войны: Пробуждение силы (2015)", "Изгой-один: Звёздные войны. Истории (2016)",
    "Звёздные войны: Последние джедаи (2017)", "Хан Соло. Звёздные войны. Истории (2018)", "Звёздные войны: Скайуокер. Восход (2019)"];

print_r($movName);

echo '<br>';

$seat = [
    "ряд 1" => [1, 2, 3, 4, 5,],
    "ряд 2" => [1, 2, 3, 4, 5, 6, 7,],
    "ряд 3" => [1, 2, 3, 4, 5, 6, 7, 8, 9],
    "ряд 4" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
    "ряд 5" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
    "ряд 6" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
    "ряд 7" => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17]
];

print_r($seat["ряд 3"][8]);

echo '<br>';

$rating = [
    "Задумка и сюжет" => 5,
    "Игра актеров" => 6,
    "Захватываемость" => 7,
    "Непредсказуемость" => 8
];
print_r($rating["Захватываемость"]);
