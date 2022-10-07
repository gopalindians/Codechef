<?php

// your code goes here
fscanf(STDIN, "%d %d %d", $n, $a, $b);
if ($n >= 2 && $n <= 1000 && $a>=1 && $a<=1000 && $b>=1 && $b<=1000 && ($a+$b)<=$n) {
    echo $n-$a.' '.($n-$a-$b);
}