<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:09 PM
 */

namespace pizza;


class Cheese extends PizzaDecorator
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function getDesc(): string
    {
        return $this->pizza->getDesc()."Cheese (9) , ";
    }

    public function getPrice(): float
    {
        return $this->pizza->getPrice()+9.88;
    }
}