<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t >= 1 && $t <= 100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d", $x);
        if($x >= 100 && $x <= 10000)
            if(($x%100)==0)
                $p=($x*10)/100;
                echo ($p>100?$p:100).PHP_EOL;
    }
