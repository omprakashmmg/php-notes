<?php
$x=readline("enter a charecter :");
(gettype($x=='string') and strlen($x)==1 and ctype_alpha($x))?:exit('invalid value supplied');
//echo 'script is running';
$output='';
switch(strtolower($x)){
case 'a':
$output ="vowel";
break;
case 'e':
$output ="vowel";
break;
case 'i':
$output= "vowel";
break;
case 'o':
$output ="vowel";
break;
case 'u':
   $output= "vowel";
break;
default:
 $output ="consonant";
break;

}
echo $output;
?>