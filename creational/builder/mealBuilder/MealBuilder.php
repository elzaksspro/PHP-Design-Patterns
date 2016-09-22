<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:25 PM
 */

namespace mealBuilder;


class MealBuilder
{
    public function prepareVegMeal(): Meal
    {
        $meal = new Meal();
        $meal->addItems(new VegBurger());
        $meal->addItems(new Pepsi());
        return $meal;
    }

    public function prepareNonVegMeal(): Meal
    {
        $meal = new Meal();
        $meal->addItems(new NonVegBurger());
        $meal->addItems(new Coke());
        return $meal;
    }
}