<?php

namespace Satung;

class SatungRounding
{
    public static function round($amount)
    {
        $dif = (float)$amount - (int)$amount;

        if($dif < 0.12){
            $add = 0;
        }
        else if($dif < 0.37){
            $add = 0.25;
        }
        else if($dif < 0.62){
            $add = 0.5;
        }
        else if($dif < 0.87){
            $add = 0.75;
        }
        else{
            $add = 1;
        }

        return number_format((int)$amount + $add, 2, '.', '');
    }
}