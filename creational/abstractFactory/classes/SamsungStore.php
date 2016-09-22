<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:43 AM
 */

namespace classes;


class SamsungStore implements Store
{
    public function get_laptop_specification(): Laptop
    {
        return new SamsungLaptop();
    }

    public function get_phone_specification(): Phone
    {
        return new SamsungPhone();
    }

    public function get_watch_specification(): Watch
    {
        return new SamsungWatch();
    }
}