<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if($x >= 1 && $x <= 10000 && $y >= 1 && $y <= 10000)
            echo (($x===$y)?'ANY':(($x<$y)?'REPAIR':'NEW PHONE')).PHP_EOL;
    }
