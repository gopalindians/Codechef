<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if($x >= 2 && $x <= 12)
            if($y >= 1 && $y < $x)
                echo (($x*4)+$y).PHP_EOL;
    }
