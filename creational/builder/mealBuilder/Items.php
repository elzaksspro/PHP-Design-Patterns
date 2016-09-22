<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:13 PM
 */

namespace mealBuilder;


interface Items
{
    public function name(): string;
    public function packing(): Packing;
    public function price(): float ;
}