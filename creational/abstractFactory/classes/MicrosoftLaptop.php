<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:40 AM
 */

namespace classes;


class MicrosoftLaptop implements Laptop
{
    public function specification(): string
    {
        return "It\'s Microsoft Laptop";
    }
}