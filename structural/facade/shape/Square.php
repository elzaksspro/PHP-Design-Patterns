<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 11/09/2016
 * Time: 7:50 AM
 */

namespace shape;


class Square implements Shape
{
    public function draw(): string
    {
        return "Square Shape";
    }
}