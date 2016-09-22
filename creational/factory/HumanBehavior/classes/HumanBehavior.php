<?php
/**
 * Created by PhpStorm.
 * User: Shazzad
 * Date: 8/28/2016
 * Time: 6:49 PM
 */
declare(strict_types=1);
namespace classes;


class HumanBehavior
{
    public function getBehavior(string $area): Behavior
    {
        if($area != null){
            if(strtoupper($area) == 'ASIA'){
                return new AsianHuman();
            } else if(strtoupper($area) == 'AUSTRALIA'){
                return new AustralianHuman();
            } else if(strtoupper($area) == 'AMERICA'){
                return new AmericanHuman();
            } else if(strtoupper($area) == 'AFRICA'){
                return new AfricanHumanBehavior();
            } else if(strtoupper($area) == 'EUROPE'){
                return new EuropianHuman();
            }
        }
        return null;
    }


}