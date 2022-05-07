<?php

namespace Price;

class Price
{

    const UAH = "UAH";
    public int $price;

    /**
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function __toString(): string
    {
        return $this->price / 100 . self::UAH;
    }

}
