<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 15/09/2016
 * Time: 8:19 AM
 */

namespace ground;


class C implements Platform
{
    public function __construct()
    {
        print "C Platform Object";
    }

    public function execute(Code $code)
    {
        print "Running C Code";
    }
}