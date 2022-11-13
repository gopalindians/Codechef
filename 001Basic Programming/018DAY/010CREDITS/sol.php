<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t >= 1 && $t <= 100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d", $n);
        if($n >= 1 && $n <= 100)
            echo ($n > 65 ? 'Overload': ($n < 35 ? 'Underload' : 'Normal') ).PHP_EOL;
    }
