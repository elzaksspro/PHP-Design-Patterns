<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 07/09/2016
 * Time: 4:25 PM
 */

namespace reader;


class Other implements Reader
{
    public $control;
    public function __construct(Controller $controller)
    {
        $this->control = $controller;
    }

    public function nextPage()
    {
        $this->control->next();
    }

    public function previousPage()
    {
        $this->control->next();
    }

    public function firstPage()
    {
        $this->control->first();
    }

    public function lastPage()
    {
        $this->control->last();
    }
}