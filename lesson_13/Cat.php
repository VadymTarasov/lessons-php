<?php

namespace Cat;
class Cat
{
    public $name;
    public $age;


    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function say(): string
    {
        return "мяу";
    }

}