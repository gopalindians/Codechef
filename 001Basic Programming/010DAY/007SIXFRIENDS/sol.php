<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if($x>=1 && $x<=100 && $y>=1 && $y<=100 && $x<$y)
            echo (($x*3)>($y*2)?$y*2:$x*3).PHP_EOL;
    }
