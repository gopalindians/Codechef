<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if ($t >= 1 && $t <= 10) {
    for ($i = 0; $i < $t; $i++) {
        fscanf(STDIN, "%d %d", $x, $y);
        if ($x >= 50 && $x <= 200 && $y >= 50 && $y <= 200) {
            echo $x-$y.PHP_EOL;
        }
    }
}