<?php

// your code goes here
fscanf(STDIN, "%d", $t);
$testCase= range(1,$t);
if( $t>=1 && $t<=1000){
    foreach ($testCase as $k=>$v){
        fscanf(STDIN, "%d %d", $x, $y);
        if( $y>=1 && $y<=1000  && $x>=1 && $x<=1000){
            if($x>=$y){
                echo (10*$x)+(90*$y).PHP_EOL;
            }
        }
    }
}