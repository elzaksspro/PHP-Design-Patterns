<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 18/09/2016
 * Time: 6:56 PM
 */

namespace classes;


class IteratorObject
{
    private $data, $position = 0, $length;
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->length = count($data);
    }

    public function next()
    {
        if($this->length() >= 1 && $this->position <= $this->length()){
            $data = $this->data[$this->position];
            $this->position++;
            return $data;
        }
        return false;
    }

    public function length()
    {
        return $this->length - 1;
    }

    public function previous()
    {
        if($this->length() >= 0){
            $this->position -= 1;
            $data = $this->data[$this->position];
            return $data;
        }
        return false;
    }
    public function pop()
    {
        if($this->length() >= 0){
            unset($this->data[$this->length()]);
        }
    }

    public function shift()
    {
        if($this->length() >= 0){
            unset($this->data[$this->position]);
        }
    }

    public function append(string $data)
    {
        if($this->length() >= 0){
            $this->data[$this->position] = $data;
        }
    }

    public function append_pop(string $data)
    {
        $this->position += $this->length() + 1;
        $this->data[$this->position] = $data;
    }

    public function getAllElement()
    {
        print_r($this->data);
    }
}