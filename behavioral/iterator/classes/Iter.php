<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 6:59 PM
 */

namespace classes;


class Iter extends IteratorObject
{
    public function __construct(array $data)
    {
        parent::__construct($data);
    }
}