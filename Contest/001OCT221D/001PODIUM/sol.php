<?php

fscanf(STDIN, "%d", $t);
$tc = range(1,$t);
if( $t>=1 && $t<=100){
    foreach($tc as $k){
        fscanf(STDIN, "%d %d", $a, $b);
        if( $a>=1 && $a<=10  && $b>=1 && $b<=10){
            echo $a+$b.PHP_EOL;
        }
    }
}