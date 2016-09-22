<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 15/09/2016
 * Time: 8:18 AM
 */

namespace ground;


interface Platform
{
    public function execute(Code $code);
}