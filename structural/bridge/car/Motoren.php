<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 08/09/2016
 * Time: 7:48 AM
 */

namespace car;


class Motoren extends Car
{
    public function __construct(Product $product, string $type)
    {
        parent::__construct($product, $type);
    }

    public function assemble()
    {
        printf("Assembling %s, for %s", $this->product->productName(), $this->type);
    }

    public function produceProduct()
    {
        printf("Modifying %s, for %s", $this->product->produce(), $this->type);
    }
}