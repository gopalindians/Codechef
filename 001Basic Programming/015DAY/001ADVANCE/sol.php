<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if($x >= 1 && $x <= 4000 && $y >= 1 && $y <= 4000)
            $z = $x + 200;
            echo (($x <= $y) && ($z >= $y)?'YES':'NO').PHP_EOL;
    }
}