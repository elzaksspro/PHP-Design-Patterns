<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:31 AM
 */
spl_autoload_register(function($class){ require str_replace('\\', '/', $class.'.php'); });

$app = new \classes\AbstractFactoryDemo(new \classes\AppleStore()); // change the store instance to get another store instance
//$app = new \classes\AbstractFactoryDemo(new \classes\SamsungStore()); // change the store instance to get another store instance
//$app = new \classes\AbstractFactoryDemo(new \classes\MicrosoftStore()); // change the store instance to get another store instance



print $app->phone_specification()->specification();
print $app->watch_specification()->specification();
print $app->laptop_specification()->specification();