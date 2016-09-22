<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 07/09/2016
 * Time: 4:22 PM
 */

namespace reader;


interface Reader
{
    public function nextPage();
    public function previousPage();
    public function firstPage();
    public function lastPage();
}