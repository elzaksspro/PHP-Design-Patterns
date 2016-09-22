<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 02/09/2016
 * Time: 4:03 PM
 */


spl_autoload_register(function($class){ require_once $class.'.php'; });

$phone = new \phone\Phone();
//print $phone->getName();
//print $phone->getSpecification();


$apple = clone $phone;
$apple->name = "APPLE CLONE";
$apple->specification = "APPLE CLONE PHONE SPECIFICATION";
//print $apple->getName();
//print $apple->getSpecification();




$television = new \phone\Television();

//print $television->getName();
//print $television->getSpecification();


$sony = clone $television;
$sony->name = "SONY CLONE";
$sony->specification = "SONY CLONE SPECIFICATION";


print $sony->getName();
print $sony->getSpecification();
