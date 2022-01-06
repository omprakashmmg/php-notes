<?php //boolian data types stored in variables
$x=true;// it is non case sensitive
echo $x;
echo PHP_EOL;
echo gettype($x);//bo0lian
echo PHP_EOL;
var_dump($x);


$y=TRUE;
echo $y;
echo PHP_EOL;
echo gettype($y);
echo PHP_EOL;
var_dump($y);

echo PHP_EOL;
echo "on compairing all the three values";
echo PHP_EOL;
echo(true==TRUE);
echo PHP_EOL;
echo(True==TRUE);
echo PHP_EOL;
echo(1===true);
echo PHP_EOL;
var_dump(1===true);





?>