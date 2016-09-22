<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 5:06 PM
 */

namespace classes;


class UnsupportedHandler implements Handler
{
    public function process(File $file)
    {
        printf("Unsupported file type, The Document Name is %s and type %s ", $file->getName(), $file->getType());
    }

}