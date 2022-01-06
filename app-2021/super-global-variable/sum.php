<?php
//wap in php to find sum  of  n number using commond line arguments
print_r($argv);
//unset($argv[0]);
$sum=0;
$avg=0;
for($i=1;$i<$argc;$i++){
$sum=$sum+(int)$argv[$i];
//echo $sum;
}
printf("the sum =%d\n",$sum);
$avg=$sum/($argc-1);
printf("the avrege=%d \n",$avg);




?>