<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t >=1 && $t<=50)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d", $c);
        if($c >= 0 && $c <= 40)
            echo ($c > 20 ? 'HOT' : 'COLD' ).PHP_EOL;
    }
