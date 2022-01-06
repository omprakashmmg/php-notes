<?php
//wap in php to show super global variable

$GLOBALS['A']=100;
$GLOBALS['B']=200;



function display(){
echo $GLOBALS['A'];
echo PHP_EOL;
echo $GLOBALS['B'];
echo PHP_EOL;

global $A,$B;  //local variable
echo $A;
echo PHP_EOL;
echo $B;
echo PHP_EOL;

$A=$GLOBALS['A'];// global variable
$B=$GLOBALS['B'];
echo $A;
echo PHP_EOL;
echo $B;
echo PHP_EOL;

}
display();
?>