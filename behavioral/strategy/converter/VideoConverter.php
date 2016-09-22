<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 9:09 AM
 */

namespace converter;


class VideoConverter implements Convert
{
    public function format(string $file)
    {
        printf("Converting %s into Video Format", $file);
    }
}