<?php
//@ supress operatore @://notice operator:error operator
//never use @ operatore becouse debugging  is importent 
$x=20;
echo "the value of x  =$x";
echo PHP_EOL;
echo "the value of y :".@$y;//undefined variable y.
echo PHP_EOL;
$z=10;
$z=isset($z)?$z:null;
var_dump($z);
echo "the value of z using ternery opertor :".$z;
echo PHP_EOL;
$z=isset($z)??null;

echo "the value of z using nullcoalescing opertor :".$z;
echo PHP_EOL;
var_dump($z);
$p=2??null;                //using nullcoalescing
if($p){
echo"p if running nullcoalescing ";
}else{
echo"p else running nullcoalescing ";
}
var_dump($p);
$p= (5<2)?'':null;
var_dump($p);
if($p){
echo"p if running ternery ";
}else{
echo"p else running ternery ";
}
