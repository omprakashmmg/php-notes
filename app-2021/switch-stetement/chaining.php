<?php
//wap in php to show chaining effect in switch
$a=readline("enter the number b/w 1-9 :");
$i=1;
switch($a){
case 1:
echo " case ".$i++." is executed...\n";
//goto exit_label;
//return;
//exit;
break;
case 2:
echo " case ".$i++." is executed...\n";
break;
case 3:
echo " case ".$i++." is executed...\n";
break;
case 4:
echo " case ".$i++." is executed...\n";
break;
case 5:
echo " case ".$i++." is executed...\n";
break;
case 6:
echo " case ".$i++." is executed...\n";
break;
case 7:
echo " case ".$i++." is executed...\n";
break;
case 8:
echo " case ".$i++." is executed...\n";
break;
case 9:
echo " case ".$i++." is executed...\n";
break;
default :
echo "default case  is executed...\n";
break;
}
 exit_label:
?>