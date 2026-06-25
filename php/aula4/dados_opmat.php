<?php
	$valor = $_POST['valor'];
	$op = $_POST['op'];

	switch ($op) {
		case 1:
			echo "O Dobro do Valor é ".($valor*2);
		break;
		case 2:
			echo "O Valor Elevado ao Cubo é ".pow($valor, 2);
		break;
		case 3:
			echo "A Raiz Quadrada do Valor é ".sqrt($valor);
		break;
	default:
		echo "Ocorreu um erro!";
	}
?>