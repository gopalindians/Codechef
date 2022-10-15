<?php
fscanf(STDIN, "%d", $t);
if( $t>=1 && $t<=100)
    $c = range(1,$t);
foreach($c as $k){
    fscanf(STDIN, "%d %d %d", $x, $y, $z);
    if($x>=1 && $x<=1000 && $y>=1 && $y<=1000 && $z>=1 && $z<=1000)
        echo floor(((($x*5) + ($y*10))>=$z)?(($x*5) + ($y*10))/$z:0).PHP_EOL;
}
