<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/28/2016
 * Time: 6:46 PM
 */

namespace classes;


class AmericanHuman implements Behavior
{
    public function getBehavior(): string
    {
        return "American Human";
    }
}