<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/29/2016
 * Time: 8:35 AM
 */

namespace classes;


class MicrosoftWatch implements Watch
{
    public function specification(): string
    {
        return "It\'s Microsoft Watch";
    }
}