<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t>=100 && $t<=169)
    echo (($t+7)>170?'YES':'NO').PHP_EOL;