<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 08/09/2016
 * Time: 7:42 AM
 */

namespace car;


interface Product
{
    public function productName(): string;
    public function produce(): string ;
}