<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:11 PM
 */

namespace pizza;


class Ham extends PizzaDecorator
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function getDesc(): string
    {
        return $this->pizza->getDesc()."Ham (7) , ";
    }
    public function getPrice(): float
    {
        return $this->pizza->getPrice()+7.34;
    }
}