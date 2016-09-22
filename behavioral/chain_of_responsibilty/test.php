<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 4:38 PM
 */

spl_autoload_register(function($class){require_once $class.'.php'; });

$file = new \classes\File("just.pdf", "pdf");
$file1 = new \classes\File("just_another.json", "json");
$file2 = new \classes\File("another.txt", "txt");
$file3 = new \classes\File("no_more.xml", "xml");
$file4 = new \classes\File("no_more.docx", "docx");

$handler = new \classes\DocHandler();
//$handler->process($file);
//$handler->process($file1);
//$handler->process($file2);
$handler->process($file3);
//$handler->process($file4);
