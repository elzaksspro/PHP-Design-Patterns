<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:21 PM
 */

namespace mealBuilder;


class Meal
{
    public $items = [];

    public function addItems(Items $items)
    {
        array_push($this->items, $items);
    }

    public function getTotalCost(): float
    {
        $cost = 0.00;
        foreach ($this->items as $item) {
            $cost += $item->price();
        }
        return $cost;
    }

    public function getItems()
    {
        foreach ($this->items as $item) {
            printf("Item: %s, Price: %s, Packing: %s, TotalCost: %s", $item->name(), $item->price(), $item->packing()->pack(), $this->getTotalCost());
        }
    }
}