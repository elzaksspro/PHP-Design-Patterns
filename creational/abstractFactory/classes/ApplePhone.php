<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:36 AM
 */

namespace classes;


class ApplePhone implements Phone
{
    public function specification(): string
    {
        return "It\'s Apple Phone";
    }
}