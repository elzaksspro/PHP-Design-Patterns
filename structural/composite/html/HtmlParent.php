<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 09/09/2016
 * Time: 3:15 PM
 */

namespace html;


class HtmlParent implements Html
{
    public $startTag, $endTag, $childList = [], $tagName;

    public function __construct(string $tag)
    {
        $this->tagName = $tag;
    }

    public function setStarTag(string $tag)
    {
        $this->startTag = $tag;
    }

    public function setEndTag(string $tag)
    {
        $this->endTag = $tag;
    }

    public function getTagName()
    {
        return $this->tagName;
    }

    public function addChild(Html $html)
    {
        array_push($this->childList, $html);
    }

    public function removeChild(Html $html)
    {
        if(array_key_exists($html, $this->childList)){
            unset($this->childList[$html]);
        }
    }

    public function generate()
    {

        $html = $this->startTag;
        foreach ($this->childList as $item) {
            $html .= $item->generate();
        }
        $html .= $this->endTag;
        print $html;
    }
}