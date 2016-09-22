<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 09/09/2016
 * Time: 3:14 PM
 */

namespace html;


interface Html
{
    public function setStarTag(string $tag);
    public function setEndTag(string $tag);
    public function generate();
}