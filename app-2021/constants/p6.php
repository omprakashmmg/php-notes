<?php
//wap in php to show diffrent between predefined error level and user define error level constants
error_reporting(E_USER_NOTICE);
printf("the value of true :%d \n ", true);
printf("the value of TRUE :%d \n ", TRUE);
printf(" true is incase-sensitive constants :%d \n ",(TRUE==1));
define('true',10,1);
printf ("value of  true after redeclairation : %d\n",true);

?>