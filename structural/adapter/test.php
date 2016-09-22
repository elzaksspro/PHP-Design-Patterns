<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 04/09/2016
 * Time: 1:49 PM
 */

spl_autoload_register(function($class){ require_once $class.'.php'; });

$adapter = new \reader\AdapterDemo();
$reader = $adapter->reader('kindle');

$reader->nextPage();
$reader->previousPage();
$reader->firstPage();
$reader->lastPage();