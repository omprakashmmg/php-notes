<?php
//wap in php to show local and global scope of variable.

$a=10;
echo "the value of a at global scope is : $a";//globa variable
echo PHP_EOL;
function display()
{
$b=200;
echo "the value of local b at local scope is : $b";
echo PHP_EOL;
echo "the value of  global  a at local scope is : $a"; //undefined variable.

}
display();
echo PHP_EOL;
echo "the value of a at global scope is : $a";

?>