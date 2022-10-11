<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if( $x>=1 && $x<=100000){
            echo ($y-$x>0?$y-$x:0).PHP_EOL;
        }
    }
}