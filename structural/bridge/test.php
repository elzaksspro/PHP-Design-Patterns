<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 08/09/2016
 * Time: 7:42 AM
 */

spl_autoload_register(function($class){ require_once $class.'.php'; });

$central_lock = new \car\CentralLock("Central Lock");
$gear_lock = new \car\GearLock("Gear Lock");

$motoren = new \car\Motoren($central_lock, "MOTOREN XZ MODEL");
$motoren->assemble();
$motoren->produceProduct();

$motoren = new \car\Motoren($gear_lock, "MOTOREN XZ MODEL");
$motoren->assemble();
$motoren->produceProduct();


$big_wheel = new \car\BigWheel($central_lock, "BIG WHEEL YUV MODEL");
$big_wheel->assemble();
$big_wheel->produceProduct();

$big_wheel = new \car\Motoren($gear_lock, "BIG WHEEL YUV MODEL");
$big_wheel->assemble();
$big_wheel->produceProduct();