<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=6){
    $tc = range(1,$t);
    foreach($tc as $k){
        fscanf(STDIN, "%d %d %d", $a, $b, $c);
        if( $a>=1 && $a<=10000  && $b>=1 && $b<=10000 && $c>=1 && $c<=10000){
            $mn = min($a,$b,$c);$mx = max($a,$b,$c);
            echo ($a>$mn && $a<$mx)?$a.PHP_EOL:(($b>$mn && $b<$mx)?$b.PHP_EOL:$c.PHP_EOL);
        }
    }
}