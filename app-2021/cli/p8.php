<?php
function input($msg=''){
	if($msg==''){
		echo 'massege is required';
		exit;
		//exit("massege is required");echo "this is massege"and exit
	}
	echo $msg;
	$input =fgets(STDIN,1024);
	return trim($input);
}
echo input();
?>