<?php

// your code goes here
fscanf(STDIN, "%d", $t);
if( $t >=1 && $t <= 5000)
    $c = range(1,$t);
    foreach($c as $k){
        fscanf(STDIN, "%d %d", $x, $y);
        if($x>=1 && $x<=100 && $y>=1 && $y<=100)
            if(($x*100)>=($y*10)){
                echo 'Cloth'.PHP_EOL;
            }else{
                echo 'Disposable'.PHP_EOL;
            }
    }
