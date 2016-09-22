<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:01 PM
 */

namespace pizza;


class NonVegPizza implements Pizza
{
    public function getDesc(): string
    {
        return "Non Veg Pizza (350), ";
    }

    public function getPrice(): float
    {
        return 350.99;
    }
}