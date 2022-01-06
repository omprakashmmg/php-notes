<?php
//wap in php to show boolian false stored in variable

$x=false;
echo $x;// out put nothing
echo PHP_EOL;
echo gettype($x);//boolean
echo PHP_EOL;
var_dump($x);//(bool false)

echo PHP_EOL;
echo json_encode($x);
echo PHP_EOL;
echo 'on comapairing value we get :-';
echo PHP_EOL;
echo (false==false);
echo PHP_EOL;
echo (false==FALSE);//compaire
echo PHP_EOL;
echo(faLSe==FALSE);
echo PHP_EOL;
var_dump(0==false);//type is optional matched content .
echo PHP_EOL;
var_dump(0==(int)false);
echo PHP_EOL;
var_dump (0===FALSE);   //content and datatype matched=false.
printf("%s","techpile");
echo PHP_EOL;
printf("%d",10);
echo PHP_EOL;
printf("%b",true);


?>