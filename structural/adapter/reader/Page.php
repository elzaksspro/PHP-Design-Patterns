<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 07/09/2016
 * Time: 4:16 PM
 */

namespace reader;


class Page implements Pager
{
    public $page;
    public function getPage(): int
    {
        return $this->page;
    }

    public function changePage(int $page)
    {
        if($page == 0){
            $this->page = 1;
        } else {
            $this->page += $page;
        }
    }
}