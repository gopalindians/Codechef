<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t >= 1 && $t <= 1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if($x >= 1 && $x <= 30 && $y >= 1 && $y <= 30)
            echo ($x===$y?$x:($x<$y?$x:$y)).PHP_EOL;
    }
