<?php

namespace App\lesson_19;

class Task1
{
   static public function getResultMultiplication(array $arr, int $num): array
    {
        $arr2 = [];
        foreach ($arr as $value) {
            $arr2[] = $value * $num;
        }
        return $arr2;
    }

    static public function sumAllElements(array $arr): mixed
    {
        function sum($carry, $item)
        {
            $carry += $item;
            return $carry;
        }
        return array_reduce($arr, "App\\lesson_19\\sum");
    }

    static function getMorNumber(array $arr, int $num): array
    {
        $arr2 = [];
        foreach ($arr as $value){
            if ($num < $value) $arr2[] = $value;
        } return $arr2;
    }

    static public function sumNumbersRecursion(int $num): int
    {
        $digit = $num % 10;
        if ($num > 0) {
            return $digit + self::sumNumbersRecursion(($num - $digit) / 10);
        }
        return $digit;
    }

}
