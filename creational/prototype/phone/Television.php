<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 02/09/2016
 * Time: 4:05 PM
 */

namespace phone;


class Television extends CloneMe
{
    public function __construct()
    {
        $this->name = "CLONE TELEVISION";
        $this->specification = "CLONE TELEVISION SPECIFICATION";
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}