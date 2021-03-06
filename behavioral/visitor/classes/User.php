<?php
/**
 * Created by PhpStorm.
 * User: xenonus
 * Date: 9/22/2016
 * Time: 9:24 PM
 */

namespace classes;


class User extends Blog
{
    public function setLastName(string $name)
    {
        $this->lastName = $name;
    }

    public function setFirstName(string $name)
    {
        $this->firstName = $name;
    }

    public function accept(Visitor $visitor)
    {
        $visitor->setStatus($this);
    }
}