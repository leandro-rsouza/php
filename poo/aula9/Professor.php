<?php
require_once "Pessoa.php";

class Professor extends Pessoa {
	private $especialidade;
	private $salario;

	public function setEspecialidade($e){
		$this->especialidade = $e;
	}

	public function getEspecialidade(){
		return $this->especialidade;
	}

	public function setSalario($s){
		$this->salario = $s;
	}

	public function getSalario(){
		return $this->salario;
	}

	public function receberAumento($valor){
		printf("<br> Valor de Aumento de Salário: ".$valor."<br>");
		$this->salario += $valor;
	}
}

?>