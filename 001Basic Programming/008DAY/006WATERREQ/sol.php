<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d",$n);
        if($n>=1 && $n<=1000){
            echo 2*$n.PHP_EOL;
        }
    }
}