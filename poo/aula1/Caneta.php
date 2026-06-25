<?php
class Caneta {
	var $modelo;
	var $cor;
	var $ponta;
	var $tampada;

	function tampar(){
		$this->tampada = true;
		printf("A Caneta Foi Tampada! <br>");
	}

	function destampar(){
		$this->tampada = false;
		printf("A Caneta Foi Destampada! <br>");
	}

	function rabiscar(){
		if($this->tampada == true){
			printf("Imposssível de Rabiscar! <br>");
			printf("Caneta Está Tampada! <br>");
		} else {
			printf("Você Está Rabiscando! <br>");
		}
	}
}
?>