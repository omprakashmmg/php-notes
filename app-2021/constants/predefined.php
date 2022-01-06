<?php
//wap in php to show predefined constants

$count=count(get_defined_constants());

printf('the total constants= %d',$count);
print_r(get_defined_constants());

?>