<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d", $n);
        if($n>=1 && $n<=10)
            echo ($n*60/20).PHP_EOL;
    }
}