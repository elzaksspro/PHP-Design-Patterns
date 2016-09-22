<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 07/09/2016
 * Time: 4:23 PM
 */

namespace reader;


class Kindle implements Reader
{
    public $control;
    public function __construct(Controller $controller)
    {
        $this->control = $controller;
    }

    public function firstPage()
    {
        $this->control->first();
        printf("The Kindle Turn to first Page");
    }

    public function lastPage()
    {
        $this->control->last();
        printf("The Kindle Turn to last Page");
    }

    public function nextPage()
    {
        $this->control->next();
        printf("The Kindle Turn to next Page");
    }

    public function previousPage()
    {
        $this->control->previous();
        printf("The Kindle Turn to previous Page");
    }
}