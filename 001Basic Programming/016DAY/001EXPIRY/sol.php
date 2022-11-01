<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t >= 1 && $t <= 2000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $n, $m, $k);
        if($n >= 1 && $n <= 100 && $m >= 1 && $m <= 100 && $k >= 1 && $k <= 100)
            echo ($m*$k >= $n ?'YES':'NO').PHP_EOL;
    }
