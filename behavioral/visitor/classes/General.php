<?php
/**
 * Created by PhpStorm.
 * User: xenonus
 * Date: 9/22/2016
 * Time: 9:30 PM
 */

namespace classes;


class General implements Visitor
{
    public function setStatus(Blog $blog)
    {
        $blog->setLastName($blog->getLastName().' '." General");
    }
}