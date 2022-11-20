<?php

fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if($a>=0 && $a<=100 && $b>=0 && $b<=100 && $c>=0 && $c<=100)
            if(($a+$b)/2<35){
                echo 'FAIL'.PHP_EOL;
            }else if(($a+$c)/2<35){
                echo 'FAIL'.PHP_EOL;
            }else if(($b+$c)/2<35){
                echo 'FAIL'.PHP_EOL;
            }else{
                echo 'PASS'.PHP_EOL;
            }
    }

