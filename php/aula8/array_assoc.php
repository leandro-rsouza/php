<?php
$c = array('nome' => 'carlos', 'idade' => '24', 'sexo' => 'masculino');

$c['peso'] = 66.7;

foreach($c as $campo => $valor) {
	$campo = ucwords($campo);
	echo "$campo: ".ucwords($valor)."<br>";
}

?>