<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=20000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if($x>=1 && $x<=200 && $y>=1 && $y<=200)
            echo (($x*(107/100))<$y?'NO':'YES').PHP_EOL;
    }
