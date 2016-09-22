<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:34 AM
 */

namespace classes;


class SamsungWatch implements Watch
{
    public function specification(): string
    {
        return "It\'s Samsung Watch";
    }
}