<?php

fscanf(STDIN, "%d", $t);
$tc = range(1,$t);
if( $t>=1 && $t<=100){
    foreach($tc as $k){
        fscanf(STDIN, "%d %d", $n, $x);
        if( $n>=1 && $n<=10  && $x>=1 && $x<=10){
            echo (((ceil(($n*$x)/4))*4)/4).PHP_EOL;
        }
    }
}