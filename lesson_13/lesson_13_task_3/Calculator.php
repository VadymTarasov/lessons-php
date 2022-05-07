<?php

namespace Calculator;

class Calculator
{
    public int $firstNumber;
    public string $operators;
    public int $secondNumber;

    /**
     * @param int $firstNumber
     * @param string $operators
     * @param int $secondNumber
     */
    public function __construct(int $firstNumber, string $operators, int $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->operators = $operators;
        $this->secondNumber = $secondNumber;
    }

    public function getResult(): float|int
    {
        return match ($this->operators) {
            '+' => $this->firstNumber + $this->secondNumber,
            '-' => $this->firstNumber - $this->secondNumber,
            '*' => $this->firstNumber * $this->secondNumber,
            '/' => $this->firstNumber / $this->secondNumber,
            '%' => $this->firstNumber % $this->secondNumber,
        };
    }
}

