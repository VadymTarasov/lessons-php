<?php

namespace App\lesson_20\task2;

class Junior
{
    private static int $getJobJunior;

    static public function resultJunWork(): int
    {
        return self::$getJobJunior = mt_rand(0, 1);
    }
}
