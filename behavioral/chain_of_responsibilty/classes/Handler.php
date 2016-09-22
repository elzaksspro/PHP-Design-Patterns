<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 4:55 PM
 */

namespace classes;


interface Handler
{
    public function process(File $file);
}