<?php

namespace Rectangle;

use Figure\Figure;

class Rectangle extends Figure
{
    public function area(): string
    {
        return $this->getFigure() . " площадь = " . $this->sideA * $this->sideB;
    }

}


