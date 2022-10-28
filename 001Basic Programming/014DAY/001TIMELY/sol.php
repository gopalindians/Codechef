<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=60)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d", $x);
        if($x<=60. && $x>=1)
            echo ($x<30?'NO':'YES').PHP_EOL;
    }
