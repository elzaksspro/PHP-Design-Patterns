<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:41 AM
 */

namespace classes;


interface Store
{
    public function get_phone_specification(): Phone;
    public function get_watch_specification(): Watch;
    public function get_laptop_specification(): Laptop;
}