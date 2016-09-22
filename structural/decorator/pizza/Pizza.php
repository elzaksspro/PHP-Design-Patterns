<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 3:59 PM
 */

namespace pizza;


interface Pizza
{
    public function getDesc(): string;
    public function getPrice(): float;
}