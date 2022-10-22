<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d", $n);
        if(($n>=0 && $n<=9)   || ($n>=0 && $n<=1000000000))
            $_n = str_split($n);
            $c = 0;
            foreach ($_n as $k=>$v){
                if($v==4){
                    $c++;
                }
            }
            echo $c.PHP_EOL;
    }