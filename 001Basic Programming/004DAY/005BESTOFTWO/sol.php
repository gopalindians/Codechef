<?php

/* You don't need to add/edit anything to the below solution.
        Click on the SUBMIT button to solve your first problem on CodeChef.*/

fscanf(STDIN, "%d", $t);
if ($t >= 1 && $t <= 1000) {
    for($i=0; $i<$t; $i++){
        fscanf(STDIN, "%d %d", $x, $y);
        if ($x >= 0 && $x <= 100 && $y >= 0 && $y <= 100) {
            if ($x > $y) {
                echo $x . PHP_EOL;
            } else {
                echo $y . PHP_EOL;
            }
        }
    }
}