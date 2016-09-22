<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 10/09/2016
 * Time: 3:58 PM
 */

spl_autoload_register(function($class){ require_once $class.'.php'; });


$veg_pizza = new \pizza\VegPizza();

$veg_pizza = new \pizza\GreenOlives($veg_pizza);
$veg_pizza = new \pizza\RomaTomatoes($veg_pizza);
$veg_pizza = new \pizza\Spinach($veg_pizza);

print "DESC: ".$veg_pizza->getDesc();
print "DESC PRICE: ".$veg_pizza->getPrice();

$non_veg = new \pizza\NonVegPizza();
$non_veg = new \pizza\Cheese($non_veg);
$non_veg = new \pizza\Meat($non_veg);
$non_veg = new \pizza\Ham($non_veg);

print "DESC2: ".$non_veg->getDesc();
print "DESC2 Price: ".$non_veg->getDesc();
