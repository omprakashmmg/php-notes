
<?php
//wap in php perfect no

$n=readline("enter a number :");
if(is_perfect($n))
{
echo "$n is Perfect Number....";
}
else
{
echo "$n is Not Perfect Number....";
}
function is_perfect($n,$i=1,$sum=0)
{
if($i==$n)
{
return false;
}
else
{
if($n %$i==0){
$sum=$sum+$i;
}
if($sum==$n){
return true;
}
return is_perfect($n,$i+1,$sum);
}
}

?>
