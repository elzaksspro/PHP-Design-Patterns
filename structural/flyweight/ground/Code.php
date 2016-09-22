<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 15/09/2016
 * Time: 8:17 AM
 */

namespace ground;


class Code
{
    private $code;
    public function setCode(string $code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }
}