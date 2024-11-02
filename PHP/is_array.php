<?php

$a = ['sample1', 'sample2'];

foreach($a as $options){
    if(in_array($options, ['sample1', 'sample2'])){
        echo "found\n";
    } else {
        echo "not found";
    }
}
