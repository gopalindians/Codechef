<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if($a >= 0 && $a <= 100 && $b >= 0 && $b <= 100 && $c >= 0 && $c <= 100)
            echo ((($a+$b+$c >= 100) && ($a>=10 && $b>=10 && $c >= 10))?'PASS':'FAIL').PHP_EOL;
    }
