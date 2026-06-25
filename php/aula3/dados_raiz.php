<?php
	$nome = $_POST['nome'];
	$valor = $_POST['valor'];

	echo "Senhor(a) $nome! <br>";
	echo "O valor da raiz de $valor é <b>".sqrt($valor)."</b><br>";
?>