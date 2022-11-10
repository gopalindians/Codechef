<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d", $x);
        if($x >= 1 && $x <= 9)
            echo ($x <= 7 ? 'yes' : 'no' ).PHP_EOL;
    }
