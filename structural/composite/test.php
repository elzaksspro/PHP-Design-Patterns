<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 09/09/2016
 * Time: 10:00 AM
 */

spl_autoload_register(function($class){ require_once $class.'.php'; });

$parent = new \html\HtmlParent("html");
$parent->setStarTag("<html>");
$parent->setEndTag("</html>");

$parent1 = new \html\HtmlParent('head');
$parent1->setStarTag('<head>');
$parent1->setEndTag('</head>');

$parent2 = new \html\HtmlParent('body');
$parent2->setStarTag('<body>');
$parent2->setEndTag('</body>');

$child = new \html\HtmlChild('h1');
$child->setStarTag('<h1>');
$child->setBody('No More Access');
$child->setEndTag('</h1>');

$child2 = new \html\HtmlChild('p');
$child2->setStarTag('<p>');
$child2->setBody('The More You Read, The More You Learn');
$child2->setEndTag('</p>');


$parent2->addChild($child);
$parent2->addChild($child2);
$parent->addChild($parent1);
$parent->addChild($parent2);

$parent->generate();