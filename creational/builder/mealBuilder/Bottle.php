<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:15 PM
 */

namespace mealBuilder;


class Bottle implements Packing
{
    public function pack(): string
    {
        return "Bottle packing";
    }
}