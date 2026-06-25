<?php
	$idade = $_GET['idade'];

	$voto = ($idade>=18 && $idade<65)?"Obrigatório":"Não Obrigatório";
	
	echo "Idade: $idade";
	echo "<br> Voto: $voto";
?>