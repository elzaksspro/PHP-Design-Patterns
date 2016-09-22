<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:37 AM
 */

namespace classes;


class SamsungPhone implements Phone
{
    public function specification(): string
    {
        return "It\'s Samsung Phone";
    }
}