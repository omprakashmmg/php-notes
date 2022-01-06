<?php
//wap in php to show case sensitive constants.
echo "user define case sensitive constants";
echo PHP_EOL;
define('gravity',10);//lowercase
define('GRAVITY',20.9);//uppercase
define ('Gravity','free fall');//capitalized
define ('GrAvIty','techpile');//capitalized
echo gravity;
echo PHP_EOL;
echo GRAVITY;
echo PHP_EOL;
echo Gravity;
echo PHP_EOL;
echo GrAvIty;
echo PHP_EOL;
echo "non case sensitive";
echo PHP_EOL;
echo true;
echo PHP_EOL;
echo TRUE;
echo PHP_EOL;
echo TrUe;
echo PHP_EOL;


?>