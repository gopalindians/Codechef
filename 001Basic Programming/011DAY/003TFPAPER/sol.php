<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=2000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $n, $k);
        if($n>=1 && $n<=100 && $k>=0 && $k<=$n)
            echo $n-$k.PHP_EOL;
    }
