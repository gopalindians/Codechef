<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d %d", $w, $x, $y, $z);
        if($w>=1 && $w<=1000 && $x>=1 && $x<=1000 && $y>=1 && $y<=1000 && $z>=1 && $z<=1000)
            echo ($w+($y*$z)===$x?'filled':($w+($y*$z) < $x?'Unfilled':'overFlow')).PHP_EOL;
    }
