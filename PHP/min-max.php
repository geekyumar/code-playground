<?php

function getMinMax($arr){
    $min = $arr[0];
    $max = $arr[0];
    
    for($i = 1; $i < count($arr); $i++){
        if($arr[$i] < $min){
            $min = $arr[$i];
        }
        if($arr[$i] > $max){
            $max = $arr[$i];
        }
    }
    echo $min . ' ' . $max;
}

getMinMax([3400, 122, 445, 2230]);