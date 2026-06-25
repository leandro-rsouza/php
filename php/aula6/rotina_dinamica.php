<?php
function soma() {
	$x = func_get_args(); // Recebe os dados
	$y = func_num_args(); // Recebe o número de dados inseridos
	$s = 0;

	for ($i=0; $i<$y ; $i++) { 
		$s = $s + $x[$i];
	}
	return $s;
}

$r = soma(3,4,3,7);
	echo $r;

?>