<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=50){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $a, $b);
        if($a>=0 && $a<=6 && $b>=0 && $b<=6)
            $x=7-$a; $y=7-$b;
        echo (($x>$y)?$y:$x).PHP_EOL;
    }
}