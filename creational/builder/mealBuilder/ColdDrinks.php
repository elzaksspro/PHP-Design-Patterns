<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:15 PM
 */

namespace mealBuilder;


abstract class ColdDrinks implements Items
{
    public function packing(): Packing
    {
        return new Bottle();
    }


}