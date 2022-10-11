<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=12){
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d",$x);
        if($x>=1 && $x<=12){
            echo ($x>=1 && $x<=4?'YES':'NO').PHP_EOL;
        }
    }
}