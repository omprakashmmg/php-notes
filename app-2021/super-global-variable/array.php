<?php
//wap in php to check a array is homogenious or hetrogenous
//wap in php to show argv is always homogenious
//print_r($argv);
function is_homo($array=[])
{

$key_type =gettype($array[0]);

// echo $key_type;

for($i=0;$i<count($array);$i++){

if($key_type===gettype($array[$i])){

}
else{
return false;
}
}
return true;
}

var_dump(is_homo($argv));
var_dump(is_homo([10,20,30,40]));
var_dump(is_homo(["omprakash","lucknow","chitrakoot"]));
var_dump(is_homo([10.5,23,true,false]));
?>