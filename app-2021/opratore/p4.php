<?php
//wap to find the reminder without % opratore.

$x=readline("enter a number :");
$y=readline("enter b number: ");

$Q=$x/$y;  //using typecasting
$a=sprintf("Q= %d",$Q);
echo PHP_EOL;
$b=sprintf("Q= %f",$Q);
echo PHP_EOL;
$c=sprintf("Q= %.2f",$Q);
echo PHP_EOL;

echo $a;
echo PHP_EOL;
echo $b;
echo PHP_EOL;
echo $c;
echo PHP_EOL;
$rem=$x-($a*$y);
echo $rem; 
?>