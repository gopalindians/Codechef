<?php

// your code goes here
fscanf(STDIN, "%d %d", $x, $y);
if( $x >= 1 && $x <= 1000 && $y >= 1 && $y <= 1000)
    echo ($x*$y).PHP_EOL;