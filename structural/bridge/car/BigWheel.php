<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 08/09/2016
 * Time: 7:51 AM
 */

namespace car;


class BigWheel extends Car
{
    public function __construct(Product $product, $type)
    {
        parent::__construct($product, $type);
    }

    public function assemble()
    {
        printf("Assembling %s, %s", $this->product->productName(), $this->type);
    }

    public function produceProduct()
    {
        printf("Modifying %s, %s", $this->product->produce(), $this->type);
    }
}