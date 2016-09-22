<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 10:13 AM
 */

namespace classes;


class DeleteDirectory implements Command
{
    public $input;

    public function addInput(string $input)
    {
        $this->input = $input;
    }

    public function execute()
    {
        printf("Deleting Existing Directory, name %s", $this->input);
    }
}