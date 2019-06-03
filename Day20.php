<?php


class Day20
{
    public static function CountSteps($x,$y){
        $num = ($x*$y)/2;
        return $num;
    }
}
$num = Day20::CountSteps(1,1);
var_dump($num);