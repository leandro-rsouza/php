<?php
	$n1 = $_GET['a'];
	$n2 = $_GET['b'];
	$m = ($n1+$n2)/2;

	echo "<b>Nota 1:</b> ".$n1."<br>";
	echo "<b>Nota 2:</b> ".$n2."<br>";
	echo "<b>Média:</b> ".$m;

	echo "<br> Situação: ".(($m>6)?"Aprovado":"Reprovado");
?>