<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 07/09/2016
 * Time: 4:18 PM
 */

namespace reader;


interface Controller
{
    public function next();
    public function previous();
    public function first();
    public function last();
}