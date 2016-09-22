<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:16 PM
 */

namespace mealBuilder;


class Pepsi extends ColdDrinks
{
    public function name(): string
    {
        return "Pepsi";
    }

    public function price(): float
    {
        return 1.22;
    }
}