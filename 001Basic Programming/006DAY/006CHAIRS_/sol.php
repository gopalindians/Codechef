<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d", $a, $b);
        if( $a>=0 && $a<=100  && $b>=0 && $b<=100){
            echo ($a-$b>=0?($a-$b):0).PHP_EOL;
        }
    }
}