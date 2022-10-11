<?php

// your code goes here
fscanf(STDIN, "%d", $x);
fscanf(STDIN, "%d %d", $a, $b);
if($a>=1 && $a<=100000 && $b>=1 && $b<=100000){
    echo ($a+$b<=$x?'YES':'NO').PHP_EOL;
}