<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d", $n, $k);
        if( $n>=1 && $n<=100  && $k>=1 && $k<=100){
            echo ($n<$k?'YES':'NO').PHP_EOL;
        }
    }
}