<?php
	$p = $_GET['p'];
	$d = $_GET['d'];
	$desc = $d/100;

	echo "O preço é de ".number_format($p, 2, ",", ".")."<br>";
		$p -= $p*$desc;
	echo "Valor com desconto: ".number_format($p, 2, ",",".");

?>