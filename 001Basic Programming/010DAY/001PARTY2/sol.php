<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $n, $x, $k);
        if($n>=1 && $n<=100 && $x>=1 && $x<=100 && $k>=1 && $k<=10000)
            echo (($n*$x)<=$k?'Yes':'No').PHP_EOL;
    }
}