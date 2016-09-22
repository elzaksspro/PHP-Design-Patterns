<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:19 PM
 */

namespace mealBuilder;


class VegBurger extends Burger
{
    public function name(): string
    {
        return "Veg Burger";
    }

    public function price(): float
    {
        return 5.77;
    }
}