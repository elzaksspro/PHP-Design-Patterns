<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 07/09/2016
 * Time: 4:19 PM
 */

namespace reader;


class PageController implements Controller
{
    public $page;
    public function __construct(Pager $pager)
    {
        $this->page = $pager;
    }

    public function next()
    {
        $this->page->changePage(1);
    }
    public function previous()
    {
        $this->page->changePage(-1);
    }

    public function first()
    {
        $this->page->changePage(0);
    }

    public function last()
    {
        $this->page->changePage(100);
    }
}