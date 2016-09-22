<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 11/09/2016
 * Time: 7:51 AM
 */

namespace shape;


class Rectangle implements Shape
{
    public function draw(): string
    {
        return "Rectangle Shape";
    }
}