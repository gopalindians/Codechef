<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t >= 0 && $t <= 1000)
    echo (($t >= 750)?'YES':'NO').PHP_EOL;
