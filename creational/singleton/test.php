<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 29-08-16
 * Time: 12.30
 */
spl_autoload_register(function($class){ require str_replace('\\', '/', $class.'.php'); });

$users = \classes\DB::getInstance()->get('products');
print_r($users->result());