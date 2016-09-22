<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 08/09/2016
 * Time: 7:43 AM
 */

namespace car;


class CentralLock implements Product
{
    public $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function productName(): string
    {
        return $this->name;
    }

    public function produce(): string
    {
        return "Central Locking System";
    }
}