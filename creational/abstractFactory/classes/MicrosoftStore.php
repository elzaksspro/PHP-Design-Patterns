<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:44 AM
 */

namespace classes;


class MicrosoftStore implements Store
{
    public function get_laptop_specification(): Laptop
    {
        return new MicrosoftLaptop();
    }

    public function get_phone_specification(): Phone
    {
        return new MicrosoftPhone();
    }

    public function get_watch_specification(): Watch
    {
        return new MicrosoftWatch();
    }
}