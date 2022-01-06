<?php
//wap in php to show string operator.

$a='life';
$b='partner';
var_dump(gettype($a));
var_dump(gettype($b));
echo $a.$b;
var_dump(gettype($a.$b));//concatenation
$x=10;
$y=20;
echo $x.$y;
var_dump(gettype($x.$y));
$result='the sum is =';
echo $result.($x+$y);
//string append.

?>