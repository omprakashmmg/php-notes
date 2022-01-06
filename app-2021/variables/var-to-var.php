<?php
//wap in php to show var -to-var refrence.
$x='10';
echo  $x;      //normal variable
echo PHP_EOL;
$y='ravi';
echo $y;
echo PHP_EOL;
$ravi=50;
echo $ravi;
echo PHP_EOL;
$z='chaman';
$$z='900';
printf("the value of refrence :%s",$chaman);
echo PHP_EOL;
$w='_100';
$$w='king';
printf("the value of w :%s \n",$w);
printf("the value of king :%s \n ",$$w);
printf("the value of variable :%s \n ",$w);
echo PHP_EOL;
$exp='x';// case 1
echo $exp;
echo PHP_EOL;
echo gettype($exp);
echo $$exp;
echo PHP_EOL;
$student ['name']='suraj';
foreach($student as $key =>$value)
{
$$key=$value;
printf("%s  : %s",$key,$value);
echo PHP_EOL;
}
echo PHP_EOL;
$car['name']="maruti";
$car["class"]="a class";
$car['price']="5.5lacks";

extract($car);

printf("the name of car : %s \n",$name);
printf("the class of car : %s \n",$class);
printf("the price of car : %s \n",$price);

?>