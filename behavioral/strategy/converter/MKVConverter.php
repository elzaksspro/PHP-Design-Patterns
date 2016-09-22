<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 9:09 AM
 */

namespace converter;


class MKVConverter implements Convert
{
    public function format(string $file)
    {
        printf("Converting file %s into MKV format", $file);
    }
}