<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 5:01 PM
 */

namespace classes;


class TxtHandler extends XmlHandler implements Handler
{
    public function process(File $file)
    {
        if($file->getType() == 'txt'){
            printf("The Document Name is %s and type %s and handler name %s", $file->getName(), $file->getType(), "TXT Handler");
        } else {
            parent::process($file);
        }
    }

}