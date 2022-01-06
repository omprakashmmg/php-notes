<?php

$a=readline("enter a number :");

$x=($a%2==0)?$x='even':$x='odd';
echo $x;
echo PHP_EOL;
$out=( $rem=$a%2 and $rem==0)?$rem='even':$rem='odd';
echo $out;
echo PHP_EOL;

?>