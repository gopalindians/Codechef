<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10){
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d", $x);
        if( $x>=1 && $x<=10){
            echo ($x*10).PHP_EOL;
        }
    }
}