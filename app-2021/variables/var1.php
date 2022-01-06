<?php
//wap in php show,floating point numbers.
$x=-0010;//convert octal number.
echo $x;
echo PHP_EOL;
#$a=08;//invlid numerical(coversion to octal range not possible)
#echo $a;
$b=10.5;
echo $b;
echo PHP_EOL;
echo gettype($b);
echo PHP_EOL;
var_dump($b);
$c=10.0;
echo $c;
echo PHP_EOL;
$d=10.000;
echo $d;
echo PHP_EOL;
$d=(int)$c;
var_dump($d);
echo gettype($d);
echo PHP_EOL;
$z=0.5;//$z.=0.5;this is process of concantnate.
echo $z;
echo PHP_EOL;
echo gettype($z);
echo PHP_EOL;
 var_dump($z);
echo PHP_EOL;
$p='a';
$p.=$z;
echo $p;
echo PHP_EOL;
echo gettype($p);
echo PHP_EOL;
$marks=5.55555555555555;
echo $marks;
echo PHP_EOL;
echo gettype($marks);
echo PHP_EOL;
var_dump($marks);
//important.
echo PHP_EOL;
$m=9.9299993;
echo $m;
echo PHP_EOL;
echo gettype($m);
echo PHP_EOL;
var_dump($m);
echo PHP_EOL;
printf("%.2f",$m);

?>