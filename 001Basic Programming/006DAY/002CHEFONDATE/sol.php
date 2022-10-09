<?php

// your code goes here
//fscanf(STDIN, "%d %d", $x, $y);
//if( $x>=1 && $x<=100  && $y>=1 && $y<=100){
//    if($y>$x){
//        echo 'YES'.PHP_EOL;
//    }else{
//        echo 'NO'.PHP_EOL;
//    }
//}

fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100){
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d %d", $x, $y);
        if( $x>=1 && $x<=100  && $y>=1 && $y<=100){
            if($x>=$y){
                echo 'YES'.PHP_EOL;
            }else{
                echo 'NO'.PHP_EOL;
            }
        }
    }
}