<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 15/09/2016
 * Time: 8:20 AM
 */

namespace ground;


class Java implements Platform
{
    public function __construct()
    {
        print "Java Platform Object";
    }

    public function execute(Code $code)
    {
        print "Executing Java Code";
    }
}