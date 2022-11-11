<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if($x>=0 && $x<=100 && $y>=0 && $y<=100)
            echo ($x*10+$y*5).PHP_EOL;
    }
