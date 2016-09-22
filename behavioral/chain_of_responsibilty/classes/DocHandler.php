<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 4:56 PM
 */

namespace classes;


class DocHandler extends PDFHandler implements Handler
{
    public function process(File $file)
    {
       if($file->getType() == 'doc'){
           printf("The Document Name is %s and type %s and handler name %s", $file->getName(), $file->getType(), $this->getHandlerName());
       } else {
            parent::process($file);
       }
    }

    public function getHandlerName()
    {
        return sprintf("%s", "DocHandler Class");
    }
}