<?php 

namespace Satung;

class SatungRounding
{
    public static function Round($amount)
    {   
        $float = (float)$amount;
        $int = (int)$amount;

        $dif = $float - $int;

        print($dif); die;
        // $number2 = explode('.', $price);
        // $int = head($number2);
        // $digit = $price - $int;

        // if ($digit < 0.12 || abs($digit - 0.12) < 0.0001) {
        //     $digit = 0;
        // } else if ($digit < 0.37 || abs($digit - 0.37) < 0.0001) {
        //     $digit = 0.25;
        // } else if ($digit < 0.62 || abs($digit - 0.62) < 0.0001) {
        //     $digit = 0.50;
        // } else if ($digit < 0.87 || abs($digit - 0.87) < 0.0001) {
        //     $digit = 0.75;
        // } else {
        //     $digit = 1;
        // }

        // return number_format($int + $digit, 2, '.', '');
    }
}