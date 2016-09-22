<?php
/**
 * Created by PhpStorm.
 * User: xenonus
 * Date: 9/22/2016
 * Time: 9:22 PM
 */

namespace classes;


abstract class Blog
{
    protected $firstName, $lastName;

    public function getName()
    {
        print $this->firstName.' '.$this->lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;

    }

    public function getLastName()
    {
        return $this->lastName;
    }

    abstract public function setFirstName(string $name);
    abstract public function setLastName(string $name);
    abstract public function accept(Visitor $visitor);
}