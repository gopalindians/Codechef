<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if($a>=1 && $a<=1000 && $b>=1 && $b<=1000 && $c>=1 && $c<=1000)
            $mx = max($a, $b, $c);
            echo ($mx===$a?'Alice':($mx===$b?'Bob':'Charlie')).PHP_EOL;
    }
}