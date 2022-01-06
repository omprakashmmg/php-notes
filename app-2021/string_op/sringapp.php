<?php
//wap in  function to show multiplication
function string_multiply($str='',$n=0){
if($n==0){
return $str;
}
$x='';
for($i=1;$i<=$n;$i++){
//$x=$x.$str;
$x.=$str;
}
return $x;
}
$a=readline("enter a string :");
$n=readline("how many times reptead :");
echo string_multiply ($a,$n);

?>