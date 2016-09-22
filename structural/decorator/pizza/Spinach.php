<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:08 PM
 */

namespace pizza;


class Spinach extends PizzaDecorator
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function getDesc(): string
    {
        return $this->pizza->getDesc()."Spinach (2) , ";
    }

    public function getPrice(): float
    {
        return $this->pizza->getPrice()+2.33;
    }
}