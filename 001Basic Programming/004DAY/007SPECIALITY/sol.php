<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if ($t >= 1 && $t <= 10000) {
    for($i=0; $i<$t; $i++){
        fscanf(STDIN, "%d %d %d", $x, $y, $z);
        if ($x >= 1 && $x <= 100 && $y >= 1 && $y <= 100 && $z >= 1 && $z <= 100) {
            $max = max($x,$y,$z);
            if ($x == $max) {
                echo 'Setter'.PHP_EOL;
            } else if ($y == $max){
                echo 'Tester'.PHP_EOL;
            }else if ($z == $max){
                echo 'Editorialist'.PHP_EOL;
            }
        }
    }
}