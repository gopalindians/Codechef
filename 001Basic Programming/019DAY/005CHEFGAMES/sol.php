<?php

fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=20)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d %d %d", $r1, $r2, $r3, $r4);
        if($r1>=0 && $r1<=1 && $r2>=0 && $r2<=1 && $r3>=0 && $r3<=1 && $r4>=0 && $r4<=1)
            echo ($r1===1||$r2===1||$r3===1||$r4===1?'OUT':'IN').PHP_EOL;
    }


