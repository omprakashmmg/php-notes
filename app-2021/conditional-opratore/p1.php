<?php

//wap in php to show conditional operator

$a=readline("enter the a value:");
if($a>2){$x='hi';}else{$x='hello';}

echo "the value of x using if -else :",$x;
$x=($a>2)?'hi':'hello';
echo "the value of x using ternary opratore right to left :",$x;
 ($a>2)?$x='hi':$x='hello';
echo "the value of simple ternery  operatore left to right :",$x;

?>