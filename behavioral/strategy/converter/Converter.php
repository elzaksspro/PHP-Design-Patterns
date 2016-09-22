<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 9:04 AM
 */

namespace converter;


class Converter
{
    private $converter;
    public function __construct(Convert $convert)
    {
        $this->converter = $convert;
    }

    public function getFormattedFile(string $file)
    {
        $this->converter->format($file);
    }
}