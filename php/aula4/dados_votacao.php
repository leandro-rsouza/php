<?php
	$ano = $_POST['ano'];

	$idade = date('Y') - $ano;

	if($idade<16){
		echo "Não Pode Votar!";
	} else {
		if(($idade>=16 && $idade<18) || ($idade>65)) {
			echo "Voto Opcional!";
		} else {
			echo "Voto Obrigatório!";
		}
	}
?>