<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 6:56 PM
 */

spl_autoload_register(function($class){ require_once $class.'.php'; });

$data = ['Shazzad', 'Hossain', 'Shohel', 'Rana', 'Masum', 'Billah', 'Ahsan', "Krisna", 'Asik', 'Rasel'];

$iter = new \classes\Iter($data);
/*
 * while ($data = $iter->next()){
 *    print $data;
 * }
 */

//print $iter->next();
//print $iter->next();
//print $iter->previous();
//print $iter->previous();
//print $iter->previous();

//$iter->shift();
//$iter->pop();
//$iter->append('Belal Uddin');
$iter->append_pop('Belal Uddin');
$iter->getAllElement();
