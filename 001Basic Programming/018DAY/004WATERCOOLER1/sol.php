<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $x, $y, $m);
        if($x>=1 && $x<=10000 && $m>=1 && $m<=10000 && $y>=1 && $y<=100000000)
            echo (($x*$m)<$y?'YES':'NO').PHP_EOL;
    }
