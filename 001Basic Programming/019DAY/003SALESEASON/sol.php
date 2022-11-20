<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d", $x);
        if($x >= 1 && $x <= 10000)
            $z = $x;
            if($x > 100 && $x <= 1000)
                $z = $z - 25;
            else if($x > 1000 && $x <= 5000)
                $z = $z - 100;
            else if($x > 5000)
                $z = $z - 500;

        echo $z.PHP_EOL;
}

