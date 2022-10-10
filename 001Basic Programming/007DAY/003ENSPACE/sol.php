<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d %d", $n, $x, $y);
        if($n>=1 && $n<=100 && $x>=1 && $x<=100 && $y>=1 && $y<=100)
            echo ($x*1+$y*2<=$n?'YES':'NO').PHP_EOL;
    }
}