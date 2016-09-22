<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:07 PM
 */

namespace pizza;


class GreenOlives extends PizzaDecorator
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function getDesc(): string
    {
        return $this->pizza->getDesc()."Green Olives (4) , ";
    }

    public function getPrice(): float
    {
        return $this->pizza->getPrice()+4.22;
    }
}