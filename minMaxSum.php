<?php
function miniMaxSum($arr) {
        function ascArray($arr){
        $minNumberSum = 0;
        sort($arr);
        for($i = 0; $i < 4; $i++){
            $minNumberSum += $arr[$i];
        }
        return $minNumberSum;
     }


     function descArray($arr){
        $maxNumberSum = 0;
        rsort($arr);
        for($i = 0; $i < 4; $i++){
            $maxNumberSum += $arr[$i];
        }
        return $maxNumberSum;
     }

     $finalOutput =ascArray($arr).' '. descArray($arr);   
    echo $finalOutput;
 
 }
 
 miniMaxSum([1, 3, 5, 7, 9]);