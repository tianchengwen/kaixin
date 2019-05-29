<?php


class Day
{
    public static function Combine($arr_A,$arr_B){
         $arr = array_merge_recursive($arr_A,$arr_B);
         $len = count($arr);
         $arr1=[];
        $arr2=[];
        $num =[];
        for($i=0;$i<=$len;$i++){
             if($arr[$i]%2==0){
                 $arr1[] = $arr[$i] ;

             }

         }
        return $arr1;
    }
}
$arr = Day::Combine([1,3,6,9],[2,4,5,8,20]);
echo '</pre>';
print_r($arr);