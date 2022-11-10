<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $c, $x, $y);
        if($c >= 1 && $c <= 100 &&  $y >= 1 && $y <= 100 )
            if($x >= 0 && $x <= $c)
                echo ( ($c-$x) * $y ).PHP_EOL;
    }
