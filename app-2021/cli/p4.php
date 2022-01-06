<?php

$op=fopen('tech.txt','r');

$txt=fgets($op,1);
echo json_encode($txt);
?>