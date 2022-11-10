<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $x, $y, $z);
        if($x >= 1 && $x <= 100 && $y >= 1 && $y <= 100 && $z >= 1 && $z <= 100)
            echo ( ($z < $x) ? 0 : ($z >= ( $x + $y)?2:1) ).PHP_EOL;
    }
