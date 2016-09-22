<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:14 PM
 */

namespace mealBuilder;


class Wrapper implements Packing
{
    public function pack(): string
    {
        return "Wrapper Packing";
    }
}