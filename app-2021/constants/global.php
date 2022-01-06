<?php
//wap in php to global scope and local scope

define('GRAVITY',10);
printf("the value of gravity :%d \n",GRAVITY);
$gravity=9.8;
printf("the value of gravity at global scope : %d \n",$gravity);
function test(){
printf("the value of gravity :%d \n",GRAVITY);
printf("the value of gravity at global scope : %d \n",$gravity);
}
test();

?>