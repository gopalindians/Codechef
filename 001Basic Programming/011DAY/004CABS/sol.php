<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if($t>=1 && $t<=100)
    for($i = 0 ; $i < $t ; $i++){
        fscanf(STDIN, "%d %d", $x,$y);
        $max = max($x,$y);
        $min = min($x,$y);
        if($x==$y)
            echo 'ANY'.PHP_EOL;
        else if($max==$x)
            echo 'SECOND'.PHP_EOL;
        else if($max==$y)
            echo 'FIRST'.PHP_EOL;
    }
