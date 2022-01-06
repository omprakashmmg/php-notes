<?php
//wap php to redeclaire error in constants.
define('gravity',10);
echo gravity;
//echo GRAVITY;   //undefined constants.
echo PHP_EOL;
define('GRAVITY',9.8);
echo GRAVITY;
echo PHP_EOL;
//redeclair.
define('gravity',8.9);    //E_user_notice error
echo gravity;
echo PHP_EOL;
define('TRUE',18);//E_notice error//predefine notice error but not show in output
echo TRUE;
echo PHP_EOL;
printf("the value of predefined constants true :%d \n ",TRUE);
define("TRUE",'yes');
printf("the value of predefined constants true : %d\n",TRUE);//e_notice
echo PHP_EOL;
printf("the value of user-defined constants gravity :%d \n ",gravity);//user_define_notice
define("gravity",9.8);
printf("the value of user-defined constants gravity : %d \n",gravity);
?>