<?php

namespace Square;

use Rectangle\Rectangle;

class Square extends Rectangle
{
    public function perimeter(): string
    {
        return $this->getFigure() . " периметр = " . ($this->sideA + $this->sideB)*2;
    }

}