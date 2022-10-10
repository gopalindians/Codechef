<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d", $a, $b);
        if($a>=1 && $a<=100000 && $b>=1 && $b<=100000)
            echo ((($a+$b)%2==0)?'YES':'NO').PHP_EOL;
    }
}