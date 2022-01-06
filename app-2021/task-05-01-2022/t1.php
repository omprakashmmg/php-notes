<?php

$x=readline("enter a charecter :");
(gettype($x=='string') and strlen($x)==1 and ctype_alnum($x))?:exit('invalid value supplied');
switch($x){
	case 0:
	echo "this value is alpha numerice";
	break;
	default:
	echo "this value is non-alpha";
}
?>