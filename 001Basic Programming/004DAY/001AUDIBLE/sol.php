<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10000){
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d", $x);
        if( $x>=1 && $x<=1000000){
            if($x>=67 && $x<=45000){
                echo 'YES'.PHP_EOL;
            }else{
                echo 'NO'.PHP_EOL;
            }
        }
    }
}