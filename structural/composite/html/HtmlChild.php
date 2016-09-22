<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 09/09/2016
 * Time: 3:20 PM
 */

namespace html;


class HtmlChild implements Html
{
    public $tagName, $startTag, $endTag, $body;
    public function __construct(string $tag)
    {
        $this->tagName = $tag;
    }

    public function getTagName()
    {
        return $this->tagName;
    }

    public function setStarTag(string $tag)
    {
        $this->startTag = $tag;
    }

    public function setEndTag(string $tag)
    {
        $this->endTag = $tag;
    }

    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public function generate()
    {
        return sprintf("%s %s %s", $this->startTag, $this->body, $this->endTag);
    }
}