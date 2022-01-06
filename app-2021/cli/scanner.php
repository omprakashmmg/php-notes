<?php
function input($msg=''){
	if($msg==''){
		exit('massege is required');
	}
	echo $msg;
	$input= fgets(STDIN,1024);
	return trim($input);
}

?>