<?php

define('GRAVITY',10);
printf("the value of gravity :%d \n",GRAVITY);
$gravity=9.8;
printf("the value of gravity at global scope : %d \n",$gravity);

class test{

          private $g;             //variable
          private $G;             //constants
public function __construct()
{
        $this->g=$gravity;
        $this->G=GRAVITY;


                   printf("the value of gravity :%d \n",GRAVITY);
                   printf("the value of gravity at global scope : %d \n",$gravity);
                   printf("the value of gravity using g for class :%d \n",$this->g);
                   printf("the value of gravity using G for class :%d \n",$this->G);
}

}
$test =new test();

?>