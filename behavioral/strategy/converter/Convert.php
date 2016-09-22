<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 9:04 AM
 */

namespace converter;


interface Convert
{
    public function format(string $file);
}