<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if ($t >= 1 && $t <= 1000) {
    for ($i = 0; $i < $t; $i++) {
        fscanf(STDIN, "%d %d", $x, $y);
        if ($x >= 100 && $x <= 200 && $y >= 100 && $y <= 200) {
            if ($x > $y) {
                echo 'A' . PHP_EOL;
            } else {
                echo 'B' . PHP_EOL;
            }
        }
    }
}