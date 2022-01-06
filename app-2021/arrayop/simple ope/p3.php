<?php
$x=[10,20,30,'ravi'];//you can declaire below
$y[4]='kumar';
$y[5]=100;
$y[6]=200;
$y[7]=200;
echo "the count of x ".count($x);
echo PHP_EOL;
echo "the count of y ".count($y);
echo PHP_EOL;
var_dump(count($x)==count($y));
print_r($x+$y);
print_r($y+$x);
var_dump(($x+$y)==($y+$x));//equal
var_dump(($x+$y)!=($y+$x));//not equal
var_dump(($x+$y)===($y+$x));//equal not identical
var_dump(($x+$y)===($x+$y));//equal identical
var_dump(($y+$x)===($y+$x));//equal and identical
var_dump(($x+$y)!==($y+$x)); //not identical 

?>