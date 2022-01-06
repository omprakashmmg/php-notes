<?php
//wap to find the reminder without % opratore.

$x=readline("enter a number :");
$y=readline("enter b number: ");

$Q=$x/$y;
echo PHP_EOL;
$rem=$x-(floor($Q)*$y);
echo  "the rem is :$rem";
?>