<?php
//wap in php to show priority local and global scope of variable.
//program concept-5

$a=10;
echo "the value of a at global scope is : $a";//global variable
echo PHP_EOL;
function display()
{
$b=200;
echo "the value of local b at local scope is : $b";
echo PHP_EOL;
global $a;
echo "the value of  global  a at local scope is : $a";
echo PHP_EOL;
$a=30;
echo "value of local a at at local scope :$a";
 

}
display();
echo PHP_EOL;
echo "the value of a at global scope is : $a";

?>