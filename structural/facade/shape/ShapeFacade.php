<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 11/09/2016
 * Time: 7:52 AM
 */

namespace shape;


class ShapeFacade
{
    public $square, $circle, $rectangle;

    public function __construct()
    {
        $this->circle = new Circle();
        $this->square = new Square();
        $this->rectangle = new Rectangle();
    }

    public function drawCircle(): string
    {
        return $this->circle->draw();
    }

    public function drawSquare(): string
    {
        return $this->square->draw();
    }

    public function drawRectangle(): string
    {
        return $this->rectangle->draw();
    }
}