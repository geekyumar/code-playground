<?php

$numberOfPyramid = readline("Enter the number of pyramids: ");
$type = readline("Enter the type of pyramid (Select 1 for regular and 2 for upside-down): ");

switch ($type) {
    case 1:
        function regularPyramid($number)
        {
            for ($i = 1; $i <= $number; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "\n";
            }
        }
        regularPyramid($numberOfPyramid);
        break;

    case 2:
        function upsidedownPyramid($number)
        {
            for ($i = $number; $i >= 1; $i--) {
                for ($j = $i; $j >= 1; $j--) {
                    echo "*";
                }
                echo "\n";
            }
        }
        upsidedownPyramid($numberOfPyramid);
        break;

    default:
        echo ("Enter a correct number");
        break;

}