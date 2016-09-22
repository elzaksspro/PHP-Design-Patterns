<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 16/09/2016
 * Time: 10:10 AM
 */

namespace classes;


interface Command
{
    public function addInput(string $input);
    public function execute();
}