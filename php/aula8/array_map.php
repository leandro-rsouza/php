<?php
$n = ['carlos','bianca','andreza'];

function ChangeUpperCase($v){
	return strtoupper($v);	
}

$n = array_map('ChangeUpperCase', $n);
var_dump($n);

?>