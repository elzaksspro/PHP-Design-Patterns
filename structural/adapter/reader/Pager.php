<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 07/09/2016
 * Time: 4:15 PM
 */

namespace reader;


interface Pager
{
    public  function getPage(): int;
    public function changePage(int $page);
}