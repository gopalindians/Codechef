<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if ($t >= 1 && $t <= 30) {
    $testCase = range(1,$t);
    foreach ($testCase as $k=>$v){
        fscanf(STDIN, "%d", $x);
        if ($x >= 1 && $x <= 30 ) {
            echo ($x*2).PHP_EOL;
        }
    }
}