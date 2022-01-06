<?php
$car['name']="maruti";
$car["class"]="a class";
$car['price']="5.5lacks";

extract($car);

printf("the name of car : %s \n",$name);
printf("the class of car : %s \n",$class);
printf("the price of car : %s \n",$price);

?>