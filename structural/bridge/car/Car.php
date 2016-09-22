<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 08/09/2016
 * Time: 7:46 AM
 */

namespace car;


abstract class Car
{
    public $product;
    public $type;

    public function __construct(Product $product, string $type)
    {
        $this->product = $product;
        $this->type = $type;
    }

    abstract public function assemble();
    abstract public function produceProduct();
}