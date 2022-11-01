<?php

// your code goes here
fscanf(STDIN, "%d %d %d %d", $p1, $p2, $p3, $p4);
if( $p1>=1 && $p1<=100  && $p1>=1 && $p1<=100 && $p1>=1 && $p1<=100 && $p1>=1 && $p1<=100)
    $c = 0;
    if($p1 >= 10){
        $c++;
    }
    if($p2 >= 10){
        $c++;
    }
    if($p3 >= 10){
        $c++;
    }
    if($p4 >= 10){
        $c++;
    }
    echo $c.PHP_EOL;