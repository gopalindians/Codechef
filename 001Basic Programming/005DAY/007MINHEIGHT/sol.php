<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000){
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d %d", $x, $h);
        if( $x>=1 && $x<=100 && $h>=1 && $h<=100 ){
            if($x >= $h){
                echo 'YES'.PHP_EOL;
            }else{
                echo 'NO'.PHP_EOL;
            }
        }
    }
}