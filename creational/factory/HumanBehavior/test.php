<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/28/2016
 * Time: 6:43 PM
 */


spl_autoload_register(function($class){ require str_replace('\\', '/', $class.'.php'); });


$behavior = new \classes\HumanBehavior();
$asia = $behavior->getBehavior('Asia');
$europe = $behavior->getBehavior('Europe');
$america = $behavior->getBehavior('America');
$australia = $behavior->getBehavior('Australia');
$africa = $behavior->getBehavior('Africa');


print $asia->getBehavior();
print $europe->getBehavior();
print $america->getBehavior();
print $australia->getBehavior();
print $africa->getBehavior();