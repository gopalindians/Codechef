<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if ($t >= 1 && $t <= 5000)
    $c = range(1, $t);
    foreach ($c as $k) {
        fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);
        if ($a >= 1 && $a <= 100 && $b >= 1 && $b <= 100)
            if ($c >= 0 && $c <= $a && $d >= 0 && $d <= $b)
                echo ((($a - $c) === ($b - $d) ? 'Any' : (($a - $c) > ($b - $d) ? 'Second': 'First'))) . PHP_EOL;
    }
