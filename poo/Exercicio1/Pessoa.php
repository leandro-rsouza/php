<?php
class Pessoa {
	private $nome;
	private $idade;
	private $sexo;

	public function __construct($n,$i,$s){
		$this->setNome($n);
		$this->setIdade($i);
		$this->setSexo($s);
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($n){
		$this->nome = $n;
	}

	private function getIdade(){
		return $this->idade;
	}

	private function setIdade($i){
		$this->idade = $i;
	}

	private function getSexo(){
		return $this->sexo;
	}

	private function setSexo($s){
		$this->sexo = $s;
	}

	public function fazerAniversario(){
		$this->idade ++;
	}
}


?>