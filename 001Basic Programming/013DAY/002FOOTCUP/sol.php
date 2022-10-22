<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
foreach($c as $k){
    fscanf(STDIN, "%d %d", $x, $y);
    if($x >= 0 && $x <= 9 && $y >= 0 && $y <= 9 )
        if($x == 0 && $y == 0){
            echo 'NO'.PHP_EOL;
        }else if($x == 0 || $y == 0){
            echo 'NO'.PHP_EOL;
        }else if($x == $y){
            echo 'YES'.PHP_EOL;
        }else{
            echo 'NO'.PHP_EOL;
        }
}