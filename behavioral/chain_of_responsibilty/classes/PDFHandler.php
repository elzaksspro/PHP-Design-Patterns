<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 4:59 PM
 */

namespace classes;


class PDFHandler extends TxtHandler implements Handler
{
    public function process(File $file)
    {
        if($file->getType() == 'pdf'){
            printf("The Document Name is %s and type %s and handler name %s", $file->getName(), $file->getType(), "PDF Handler");
        } else {
            parent::process($file);
        }
    }

}