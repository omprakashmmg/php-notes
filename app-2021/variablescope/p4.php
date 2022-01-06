<?php
//wap in php to show global scope and defined from local scope.

$a=10;
//$b=13;
echo "the value of a fom global :$a";
echo PHP_EOL;
function test1(){
global $a;
echo "the value of a from global inside test1 :$a";
echo PHP_EOL;
global $b;
$b=50;
echo "the value of b from local  scope inside global variable :$b";
echo PHP_EOL;

}
test1();
function test2(){
global $a;
global $b;
echo "the value of a from global inside test2 :$a";
echo PHP_EOL;
echo "the value of b from local  scope inside global variable :$b";
echo PHP_EOL;
}
test2();
?>