<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 9:03 AM
 */

spl_autoload_register(function ($class){ require_once $class.'.php'; });

$converter = new \converter\Converter(new \converter\AudioConverter());
//$converter->getFormattedFile("i_love_u.mp3");


$converter = new \converter\Converter(new \converter\VideoConverter());
//$converter->getFormattedFile("hello.mp4");


$converter = new \converter\Converter(new \converter\MKVConverter());
$converter->getFormattedFile("no_more.mkv");