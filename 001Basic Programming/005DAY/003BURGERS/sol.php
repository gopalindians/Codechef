<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000){
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d %d", $x, $y);
        if( $x>=1 && $x<=100000 && $y>=1 && $y<=100000){
            echo min($x, $y).PHP_EOL;
        }
    }
}