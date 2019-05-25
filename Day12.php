<?php


class Day
{
    public static function Sum_Solution($n){

        $num = 0;
        for($i = 0 ;$i<=$n;$i++){
            $num +=$i;
        }
        return $num;
    }

}
$str = Day::Sum_Solution(5);
var_dump($str);