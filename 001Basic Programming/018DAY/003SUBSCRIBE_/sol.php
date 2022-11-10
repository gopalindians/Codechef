<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $n, $x);
        if($n >= 1 && $n <= 100 && $x >= 1 && $x <= 1000)
            echo ((ceil($n/6)) * $x).PHP_EOL;
    }
