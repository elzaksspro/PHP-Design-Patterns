<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 9:07 AM
 */

namespace converter;


class AudioConverter implements Convert
{
    public function format(string $file)
    {
        printf("formatting %s into audio format", $file);
    }
}