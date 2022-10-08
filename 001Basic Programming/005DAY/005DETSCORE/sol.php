<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d %d", $x, $n);
        if( $x>=10 && $x<=200 && $n>=0 && $n<=10){
            if($x%10===0){
                echo (($x/10)*$n).PHP_EOL;
            }
        }
    }
}