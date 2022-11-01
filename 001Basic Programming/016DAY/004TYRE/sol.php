<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $n, $m);
        if($n>=0 && $n<=100 && $m>=0 && $m<=100)
            echo ($n*2)+($m*4).PHP_EOL;
    }
