<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 10:06 AM
 */

spl_autoload_register(function ($class){ require_once $class.'.php'; });
$kernel = new \classes\Kernel();

$kernel->switchToCommand('new');
//$kernel->switchToCommand('delete');
//$kernel->switchToCommand('hh');