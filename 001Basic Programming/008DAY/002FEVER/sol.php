<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d", $x);
        if( $x>=94 && $x<=103){
            echo ($x>98?'YES':'NO').PHP_EOL;
        }
    }
}