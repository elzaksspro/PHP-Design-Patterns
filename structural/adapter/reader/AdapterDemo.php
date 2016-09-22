<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 07/09/2016
 * Time: 4:28 PM
 */

namespace reader;


class AdapterDemo
{
    public function reader(string $reader)
    {
        if(strtoupper($reader) == 'KINDLE'){
            return new Kindle(new PageController(new Page()));
        } else if(strtoupper($reader) == 'OTHER'){
            return new Other(new PageController(new Page()));
        } else {
            return false;
        }
    }
}