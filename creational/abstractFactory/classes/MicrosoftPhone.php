<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:38 AM
 */

namespace classes;


class MicrosoftPhone implements Phone
{
    public function specification(): string
    {
        return "It\'s Microsoft Phone";
    }
}