<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:46 AM
 */

namespace classes;


class AbstractFactoryDemo
{
    public $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function phone_specification(): Phone
    {
        return $this->store->get_phone_specification();
    }

    public function laptop_specification(): Laptop
    {
        return $this->store->get_laptop_specification();
    }

    public function watch_specification(): Watch
    {
        return $this->store->get_watch_specification();
    }
}