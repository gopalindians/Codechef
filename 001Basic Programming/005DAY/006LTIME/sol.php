<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=12){
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d", $x);
        if( $x>=1 && $x<=12){
            if($x>=1 && $x<=4){
                echo 'YES'.PHP_EOL;
            }else{
                echo 'NO'.PHP_EOL;
            }
        }
    }
}