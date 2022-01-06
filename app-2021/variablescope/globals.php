<?php
//wap in php to show super global variable

$a=20;
$b=30;
print_r($GLOBALS);
function display(){

echo "the value of a from globals using super global : {$GLOBALS['a']}";
echo PHP_EOL;
echo "the value of b from globals using super global : {$GLOBALS['b']}";
echo PHP_EOL;
global $a,$b;
echo "the value of a from globale :$a";
echo PHP_EOL;
echo "the value of b from globale :$b";
$a=$GLOBALS['a']; //without using global keyword
$b=$GLOBALS['b'];//without using global keyword
echo "the value of a using without global keyword :$a";
echo PHP_EOL;
echo "the value of b using without global keyword :$b";
echo PHP_EOL;
}
display();
?>