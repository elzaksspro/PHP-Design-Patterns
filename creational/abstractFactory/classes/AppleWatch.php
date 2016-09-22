<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:33 AM
 */

namespace classes;


class AppleWatch implements Watch
{
    public function specification(): string
    {
        return "It\'s Apple Watch";
    }
}