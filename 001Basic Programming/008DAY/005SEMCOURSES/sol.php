<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d",$x,$y,$z);
        if($x>=1 && $x<=1000 && $y>=1 && $y<=1000 && $z>=1 && $z<=1000){
            echo ($x==1?$y*$z:($y==1?$x*$z:($z==1?$x*$y:$x*$y*$z))).PHP_EOL;
        }
    }
}