<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d %d", $w, $x, $y,$z);
        if($w>=1 && $w<=10000 && $x>=1 && $x<=10000 && $y>=1 && $y<=10000 && $z>=1 && $z<=10000)
            echo ($w+(($x-$y)*$z)).PHP_EOL;
    }
