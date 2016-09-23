<?php
/**
 * Created by PhpStorm.
 * User: xenonus
 * Date: 9/23/2016
 * Time: 2:36 PM
 */

spl_autoload_register(function($class){require_once $class.'.php';});

$mysql = new \classes\MySQL("c:/xampp/mysql", "127.0.0.1", "root", "", "products");
//$mysql->prepareStatement("SELECT * FROM users");
//$mysql->execute();
//$mysql->close();

$oracle = new \classes\Oracle("c:/xampp/mysql", "127.0.0.1", "root", "", "products");
$oracle->prepareStatement("SELECT * FROM products");
$oracle->execute();
$oracle->close();
