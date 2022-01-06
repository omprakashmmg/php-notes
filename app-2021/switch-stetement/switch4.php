<?php
//wap in php to show consonants and vowel with multicase

$x=readline("enter a charecter :");
(gettype($x=='string') and strlen($x)==1 and ctype_alpha($x))?:exit('invalid value supplied');
//echo 'script is running';
$output='';
switch($x){
case 'a':
case 'A':
$output ="vowel";
break;
case 'e':
case 'E':
$output ="vowel";
break;
case 'i':
case 'I':
$output= "vowel";
break;
case 'o':
case 'O':
$output ="vowel";
break;
case 'u':
case 'U':
   $output= "vowel";
break;
default:
 $output ="consonant";
break;

}
echo $output;
?>