<?php


class Day
{
    public static function Find($target,$array){

        $number =0;
           $num = implode(' ',$array);
           $len = strlen($num);
           for($i=0;$i<=$len;$i++){
               if($num[$i] == $target){
                   $number++;
               }
           }
           return $number;
    }
}
$count = Day::Find(2,[1,2,8,9,2,4,9,12,4,7,10,13,6,8,11,15]);
var_dump($count);