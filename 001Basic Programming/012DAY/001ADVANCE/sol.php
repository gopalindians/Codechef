<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $n, $m, $x);
        if($n>=1 && $n<=1000 && $m>=1 && $m<=1000 && $x>=1 && $x<=1000)
            echo ((($n*2)+($m*2))*$x).PHP_EOL;
    }

