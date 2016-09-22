<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 15/09/2016
 * Time: 8:12 AM
 */

spl_autoload_register(function($class){ require_once $class.'.php'; });


$c = new \ground\Code();
$ground = \ground\Ground::factory('C');
$ground->execute($c);

$c1 = new \ground\Code();

$ground = \ground\Ground::factory('C');
$ground->execute($c1);

$java = new \ground\Code();
$java1 = new \ground\Code();

$ground = \ground\Ground::factory('JAVA');
$ground->execute($java);
$ground->execute($java1);

$python = new \ground\Code();
$python1 = new \ground\Code();

$ground = \ground\Ground::factory('PYTHON');
$ground->execute($python);
$ground->execute($python1);

