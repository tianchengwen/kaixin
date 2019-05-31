<?php


class Day
{
  public  static  function num($num){
    $arr = [];
   $arr = explode(' ',$num);
   for($i=0;$i<=$num;$i++) {
       if ($arr[$i] = $num) {
       return key($arr[$i]);
       }
   }
   }

}
$num = Day::num(5);
var_dump($num);