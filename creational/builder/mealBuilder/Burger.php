<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:19 PM
 */

namespace mealBuilder;


abstract class Burger implements Items
{
    public function packing(): Packing
    {
        return new Wrapper();
    }
}