<?php

namespace Products;

use Price\Price;


class Products
{
    public string $title;
    public Price $price;

    /**
     * @param string $title
     * @param Price $price
     */
    public function __construct(string $title, Price $price)
    {
        $this->title = $title;
        $this->price = $price;
    }

    public static function getArray($product): static
    {
        return new static ($product['title'], new Price($product['price']));
    }
}
