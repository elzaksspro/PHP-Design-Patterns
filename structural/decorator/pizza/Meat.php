<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:10 PM
 */

namespace pizza;


class Meat extends PizzaDecorator
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function getDesc(): string
    {
        return $this->pizza->getDesc()."Meat (8) , ";
    }

    public function getPrice(): float
    {
        return $this->pizza->getPrice()+8.66;
    }
}