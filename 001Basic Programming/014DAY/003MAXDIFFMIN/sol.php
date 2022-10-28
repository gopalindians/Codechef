<?php

fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if($a >= 1 && $a <= 10 && $b >= 1 && $b <= 10 && $c >= 1 && $c <= 10 && $a < $b && $a <$c && $b< $c)
            echo (max($a,$b,$c)-min($a,$b,$c)).PHP_EOL;
    }
