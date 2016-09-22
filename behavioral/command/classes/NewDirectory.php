<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 10:11 AM
 */

namespace classes;


class NewDirectory implements Command
{
    public $input;
    public function addInput(string $input)
    {
        $this->input = $input;
    }

    public function execute()
    {
        printf("Creating New Directory, name %s", $this->input);
    }
}