<?php


class Day
{
  public static  function NumberOf1($n){
      if($n%2 == 0 ){
          return $n;
      }
  }
}
$num = Day::NumberOf1(10);
var_dump($num);