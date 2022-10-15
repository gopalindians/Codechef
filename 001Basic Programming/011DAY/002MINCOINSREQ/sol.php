<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=1000)
    $c = range(1,$t);
foreach($c as $k){
    fscanf(STDIN, "%d", $x);
    if($x>=1 && $x<=1000)
        echo (($x%10==0)?0:($x%10)).PHP_EOL;
}
