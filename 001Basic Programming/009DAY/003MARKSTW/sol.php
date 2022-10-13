<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $x, $y, $z);
        if( $x>=1 && $x<=10 && $y>=1 && $y<=10 && $z>=1 && $z<=10){
            echo ($y<=$x?$x-$y+$z:0).PHP_EOL;
        }
    }
}