<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if( $a>=1 && $a<=10  && $b>=1 && $b<=10 && $c>=1 && $c<=10){
            echo ($a*4+$b*2).PHP_EOL;
        }
    }
}