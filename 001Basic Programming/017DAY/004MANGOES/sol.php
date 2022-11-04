<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $x, $y, $z);
        if($x>=1 && $x<=100 && $y>=1 && $y<=100 && $z>=1 && $z<=100)
            echo ((int)(($z-$y)/$x)).PHP_EOL;
    }
