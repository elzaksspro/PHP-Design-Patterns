<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 15/09/2016
 * Time: 8:21 AM
 */

namespace ground;


class Python implements Platform
{
    public function __construct()
    {
        print "Python Platform Object";
    }

    public function execute(Code $code)
    {
        print "Executing Python Code";
    }
}