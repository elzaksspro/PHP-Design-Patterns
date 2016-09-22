<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:42 AM
 */

namespace classes;


class AppleStore implements Store
{
    public function get_phone_specification(): Phone
    {
        return new ApplePhone();
    }

    public function get_laptop_specification(): Laptop
    {
        return new AppleLaptop();
    }

    public function get_watch_specification(): Watch
    {
        return new AppleWatch();
    }
}