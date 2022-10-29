<?php

fscanf(STDIN, "%d", $t);
if ($t >= 1 && $t <= 288)
    $c = range(1, $t);
    foreach ($c as $k) {
        fscanf(STDIN, "%d %d %d %d %d %d", $a, $b, $a1, $b1, $a2, $b2);
        if ($a >= 1 && $a <= 4 && $b >= 1 && $b <= 4 && $a1 >= 1 && $a1 <= 4 && $b1 >= 1 && $b1 <= 4 && $a2 >= 1 && $a2 <= 4 && $b2 >= 1 && $b2 <= 4)
            if ((($a1 === $a) && ($b1 === $b)) || (($b1 === $a) && ($a1 === $b))) {
                echo '1' . PHP_EOL;
            } else if ((($a2 === $a) && ($b2 === $b)) || (($b2 === $a) && ($a2 === $b))) {
                echo '2' . PHP_EOL;
            } else {
                echo '0' . PHP_EOL;
            }
    }