<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 4:02 PM
 */

namespace pizza;


abstract class PizzaDecorator implements Pizza
{
    protected $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }
}