<?php
require_once "Aluno.php";

class Bolsista extends Aluno {
	private $bolsa;

	public function setBolsa($b){
		$this->bolsa = $b;
	}

	public function getBolsa(){
		return $this->bolsa;
	}

	public function renovarBolsa(){
		printf("<br> Renovar Bolsa");
	}

	public function pagarMensalidade(){ // Sobreposição
		printf("<br> Mensalidade Paga Com Desconto!");
	}
}

?>