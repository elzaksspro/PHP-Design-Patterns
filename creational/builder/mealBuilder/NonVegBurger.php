<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:20 PM
 */

namespace mealBuilder;


class NonVegBurger extends Burger
{
    public function name(): string
    {
        return "Non Veg Burger";
    }
    public function price(): float
    {
        return 6.7;
    }
}