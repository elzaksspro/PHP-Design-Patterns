<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 5:03 PM
 */

namespace classes;


class JSONHandler extends UnsupportedHandler implements Handler
{
    public function process(File $file)
    {
        if($file->getType() == 'json'){
            printf("The Document Name is %s and type %s and handler name %s", $file->getName(), $file->getType(), "JSON HANDLER");
        } else {
            parent::process($file);
        }
    }

}