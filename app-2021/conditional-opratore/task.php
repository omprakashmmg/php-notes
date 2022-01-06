<?php
//wap in php to find perfect number using recursion.
$n=readline("enter n number ");
$sum=0;
for($i=1;$i<$n;$i++){
if($n%$i==0){
//echo "$i \n";
$sum=$sum+$i;
}
}
if ($sum==$n){
echo 'no is perfect';
}else{
echo 'no is not perect';
}
?>