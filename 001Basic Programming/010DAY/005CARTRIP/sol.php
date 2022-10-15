<?php

// your code goes here
fscanf(STDIN, "%d %d", $n, $u);
if( $n>=1 && $n<=100000 &&  $u>=1 && $u<=100000 )
    echo $n-$u.PHP_EOL;
