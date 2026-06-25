<?php
	$nome = $_POST['nome'];
	$ano = $_POST['ano'];
	$sexo = $_POST['sexo'];

	$idade = date('Y') - $ano;

	echo "Senhor(a) $nome! <br>";
	echo "Ano de Nascimento: $ano <br>";
	echo "Sexo: $sexo <br>";
	echo "Sua idade é $idade";
?>