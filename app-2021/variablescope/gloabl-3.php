
<?php
$GLOBALS['A']=100;
$GLOBALS['B']=200;



function display()
{
echo $GLOBALS['A'];
echo PHP_EOL;
echo $GLOBALS['B'];
echo PHP_EOL;
extract($GLOBALS);
echo $A;
echo PHP_EOL;
echo $B;
echo PHP_EOL;
}
display();
?>