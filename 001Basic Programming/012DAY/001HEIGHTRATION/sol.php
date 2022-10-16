<?php

// your code goes here
fscanf(STDIN, "%d %d", $a, $b);
if($a>=1 && $a<=100 && $b>=0 && $b<=100)
    echo $a>$b?$a:$b;
