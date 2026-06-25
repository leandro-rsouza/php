<?php
class Pessoa {
	public function atribuiNome($nome){
		return printf("O nome da pessoa é ".$nome);
	}
}

class Exibe {
	public $pessoa;
	public $nome;

	function __construct($nome){
		$this->pessoa = new Pessoa(); // Composição: Instância da Classe Pessoa a Torna Dependente da Classe Exibe
		$this->nome = $nome;
	}

	public function exibeNome(){
		printf($this->nome->atribuiNome($this->nome));
	}
}

$exibe = new Exibe("Carlos");
$exibe->exibeNome();

?>