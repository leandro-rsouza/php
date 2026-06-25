<?php
$n = array(0,6,7,1,3);

function CheckNumbers($v){
	return $v>=4;	
}

$n = array_filter($n, 'CheckNumbers');
var_dump($n);

?>