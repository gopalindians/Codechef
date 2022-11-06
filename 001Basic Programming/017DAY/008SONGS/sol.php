<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $n, $k);
        if($n>=1 && $n<=100 && $k>=1 && $k<=10)
            echo ((int)($n/($k*3))).PHP_EOL;
    }
