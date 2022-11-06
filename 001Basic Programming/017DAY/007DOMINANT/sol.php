<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=2000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if($a>=1 && $a<=100 && $b>=1 && $b<=100 && $c>=1 && $c<=100)
            echo ($a>$b+$c?'YES':($c>$a+$b?'YES':($b>$a+$c?'YES':'NO'))).PHP_EOL;
    }
