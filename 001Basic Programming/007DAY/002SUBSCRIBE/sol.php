<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d", $x);
        echo ($x>30?'YES':'NO').PHP_EOL;
    }
}