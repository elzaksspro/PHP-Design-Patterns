<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:00 PM
 */

namespace pizza;


class VegPizza implements Pizza
{
    public function getDesc(): string
    {
        return "Veg Pizza (230), ";
    }

    public function getPrice(): float
    {
        return 230.77;
    }
}