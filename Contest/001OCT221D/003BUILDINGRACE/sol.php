<?php

fscanf(STDIN, "%d", $t);
$tc = range(1,$t);
if( $t>=1 && $t<=2500){
    foreach($tc as $k){
        fscanf(STDIN, "%d %d %d %d", $a, $b, $x, $y);
        if( $a>=1 && $a<=100  && $b>=1 && $b<=100 && $x>=1 && $x<=10 && $y>=1 && $y<=10 ){
            echo ($a/$x== $b/$y?'Both':($a/$x<$b/$y?'Chef':'Chefina')).PHP_EOL;
        }
    }
}