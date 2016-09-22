<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 02/09/2016
 * Time: 4:03 PM
 */

namespace phone;


abstract class CloneMe
{
    public $name;
    public $specification;

    public function getName()
    {
        return $this->name;
    }

    public function getSpecification()
    {
        return $this->specification;
    }

    abstract public function __clone();
}