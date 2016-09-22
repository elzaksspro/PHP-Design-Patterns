<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 15/09/2016
 * Time: 8:22 AM
 */

namespace ground;


class Ground
{
    private static $store = [];
    public static function factory(string $type)
    {
        $factory = array_key_exists(strtoupper($type), self::$store) ? self::$store[strtoupper($type)] : null;
        if($factory == null){
            switch (strtoupper($type)){
                case 'C': {
                    $factory = new C();
                }
                break;
                case 'JAVA': {
                    $factory = new Java();
                }
                break;
                case 'PYTHON': {
                    $factory = new Python();
                }
                break;
            }
            self::$store[strtoupper($type)] = $factory;
        }
        return $factory;
    }
}