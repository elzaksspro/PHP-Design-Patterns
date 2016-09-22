<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:05 PM
 */

namespace pizza;


class RomaTomatoes extends PizzaDecorator
{
    public function __construct(Pizza $pizza)
    {
        parent::__construct($pizza);
    }

    public function getDesc(): string
    {
        return $this->pizza->getDesc()."Roma (5) , ";
    }

    public function getPrice(): float
    {
        return $this->pizza->getPrice()+5.62;
    }
}