<?php
//wap to find the reminder without % opratore.

$x=readline("enter a number :");
$y=readline("enter b number: ");
printf("the division of =");
$Q=intval($x/$y);  //using typecasting
//echo gettype($Q);
echo $Q;
$rem=$x-($Q*$y);
echo PHP_EOL;
echo $rem;
 
?>