<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:17 PM
 */

namespace mealBuilder;


class Coke extends ColdDrinks
{
    public function name(): string
    {
        return "Coke";
    }
    public function price(): float
    {
        return 1.33;
    }
}