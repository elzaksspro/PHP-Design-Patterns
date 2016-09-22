<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 11/09/2016
 * Time: 7:48 AM
 */


spl_autoload_register(function ($class){ require_once $class.'.php'; });


$shape = new \shape\ShapeFacade();
print $shape->drawCircle();
print $shape->drawRectangle();
print $shape->drawSquare();