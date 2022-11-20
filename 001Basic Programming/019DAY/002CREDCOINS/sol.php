<?php

// your code goes here
fscanf(STDIN, "%d", $t);
    if( $t >= 1 && $t <= 100)
        $c = range(1,$t);
        foreach($c as $k){
            fscanf(STDIN, "%d %d", $x, $y);
            if($x >= 1 && $x <= 1000 && $y >= 1 && $y <= 1000){
                $z = $x * $y;
                echo ($z <100 ? 0 : (intval( $z / 100))).PHP_EOL;
            }
        }

