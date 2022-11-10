<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if($a>=1 && $a<=10 && $b>=1 && $b<=10 && $c>=1 && $c<=10)
            echo ((($a+$b)/2) > $c?'YES':'NO').PHP_EOL;
    }
