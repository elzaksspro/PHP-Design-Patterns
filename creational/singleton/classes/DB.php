<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 29-08-16
 * Time: 12.06
 */

namespace classes;


class DB
{
    public static $instance = null;

    public static function getInstance()
    {
        if(!isset(self::$instance)){
            self::$instance = new Query();
        }
        return self::$instance;
    }
}