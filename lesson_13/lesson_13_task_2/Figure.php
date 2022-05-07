<?php

namespace Figure;

class Figure
{
    public int $sideA;
    public int $sideB;

    /**
     * @param int $sideA
     * @param int $sideB
     */
    public function __construct(int $sideA, int $sideB)
    {
        $this->sideA = $sideA;
        $this->sideB = $sideB;
    }

    /**
     * @return string
     */
    public function getFigure(): string
    {
        $res = '';
        if ($this->sideA == $this->sideB) $res .= "квадрат";
        if ($this->sideA !== $this->sideB) $res .= "прямоугольник";
        return $res;
    }

}

