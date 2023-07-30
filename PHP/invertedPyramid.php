<?php

$number = readline("Enter the number of pyramids: ");

function invertedPyramid($number)
{
    echo "\n";
    for ($i = $number; $i >= 1; $i--) {
        for ($j = $i; $j >= 1; $j--) {
            echo "*";
        }
        echo "\n";
        for($k = $i-1; $k < $number; $k++)
        {
            echo "\x20";
        }
    }
}
invertedPyramid($number);