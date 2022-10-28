<?php

fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=21000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
            if($a >= 100 && $a <= 200 && $b >= 100 && $b <= 200 && $c >= 1 && $c <= 50)
                echo ($b-$a)/$c.PHP_EOL;
    }
