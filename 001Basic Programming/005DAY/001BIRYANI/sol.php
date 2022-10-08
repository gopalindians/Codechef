<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10000){
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d %d", $x, $y);
        if( $x>=1 && $x<=100  && $y>=1 && $y<=100){
            echo $x*$y.PHP_EOL;
        }
    }
}