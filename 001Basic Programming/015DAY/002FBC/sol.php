<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $k);
        if($x >= 1 && $x <= 1000 && $k >= 1 && $k <= 1000 )
            echo $x-$k.PHP_EOL;
    }
