<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=10)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $x, $p, $q);
        if($x>=1 && $x<=10 && $p>=0 && $p<=10 && $q>=0 && $q<=10 && $q<=$p)
            echo ($p-$q)*$x.PHP_EOL;
    }