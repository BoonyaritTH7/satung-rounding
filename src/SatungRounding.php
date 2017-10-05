<?php

namespace Satung;

class SatungRounding
{
    protected function round($amount)
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

    public static function calculate($amount, $vat = 0, $quantity = 1)
    {
        $price_include_vat = (float)$amount * ((100 + $vat) / 100);
        $price = self::round($price_include_vat);
        return (float)$price * $quantity;
    }
}