<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:39 AM
 */

namespace classes;


class SamsungLaptop implements Laptop
{
    public function specification(): string
    {
        return "It\'s Samsung Laptop";
    }
}