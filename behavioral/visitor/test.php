<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 21/09/2016
 * Time: 11:47 AM
 */

spl_autoload_register(function($class){ require_once $class.'.php';});

$member = new \classes\Member();
$member->setFirstName("Shazzad");
$member->setLastName("Hossain");


$user = new \classes\User();
$user->setFirstName("Masum");
$user->setLastName("Billah");

$member->accept(new \classes\VIP());
$member->getName();



$user->accept(new \classes\General());
$user->getName();