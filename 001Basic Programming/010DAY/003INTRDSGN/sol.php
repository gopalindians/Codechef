<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d %d", $x1, $y1, $x2, $y2);
        if($x1>=1 && $x1<=100 && $x2>=1 && $x2<=100 && $y1>=1 && $y1<=100 && $y2>=1 && $y2<=100){
            $x=$x1+$y1; $y=$x2+$y2;
            echo (($x>$y)?$y:$x).PHP_EOL;
        }
    }
}