<?php
$n=readline("enter a nu b/w 1 to 9 :");

switch($n){

case 1:
echo "case 1 is executing \n";
goto exit_label;
case 2:
echo "case 2 is executing";

case 3:
echo "case 3 is executing";

case 4:
echo "case 4 is executing";

default:
echo "case 1 is executing";

}
exit_label:
print("this is excuting \n");
?>