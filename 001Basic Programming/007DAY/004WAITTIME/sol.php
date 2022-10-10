<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=500){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d", $k, $x);
        if($k>=1 && $k<=10 && $x>=1 && $x<=$k*7)
            echo ($k*7-$x).PHP_EOL;
    }
}