<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 01/09/2016
 * Time: 6:12 PM
 */

spl_autoload_register(function($class){ require_once str_replace('\\', '/', $class.'.php'); });



$cafe = new \mealBuilder\MealBuilder();
//$vegetarian = $cafe->prepareVegMeal();
$non_vegetarian = $cafe->prepareVegMeal();
$non_vegetarian->getItems();