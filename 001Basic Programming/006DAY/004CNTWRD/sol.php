<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    $tc= range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d", $n, $m);
        if( $n>=1 && $n<=100  && $m>=1 && $m<=100){
            echo $n*$m.PHP_EOL;
        }
    }
}