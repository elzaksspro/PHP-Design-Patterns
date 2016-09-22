<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 02/09/2016
 * Time: 4:04 PM
 */

namespace phone;


class Phone extends CloneMe
{
    public function __construct()
    {
        $this->name = "CLONE PHONE";
        $this->specification = "IT\'S CLONE PHONE SPECIFICATION";
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}