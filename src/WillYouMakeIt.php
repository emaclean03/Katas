<?php


namespace App;


class WillYouMakeIt
{
    public function calculate($distance, $mpg, $fuelLeft):bool{
        $totalGas = $mpg * $fuelLeft;
        if($distance > $totalGas){
            return false;
        }
        return true;
    }
}