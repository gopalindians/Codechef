<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $n, $m, $k);
        if($n>=1 && $n<=100 && $m>=1 && $m<=100)
            if($k >= 0 && $k <= $m)
                echo (($k+$n) <= $m? 'YES':'NO').PHP_EOL;
    }