<?php

// your code goes here
fscanf(STDIN, "%d %d", $x, $y);
if( $x>=1 && $x<=100 && $y>=1 && $y<=100){
    echo ($x>=2*$y?'YES':'NO').PHP_EOL;
}