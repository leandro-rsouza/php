<?php
class produtos {
	public $nome;
	public $valor;

	public function __construct($n, $v){
		$this->nome = $n;
		$this->valor = $v;
	}
}

class Carrinho {
	public $produtos;

	public function adiciona(Produtos $produto){
		$this->produtos[] = $produto; // Agregação: Atributo Abstrato Dentro da Classe Carrinho
	}

	public function exibe(){
		foreach($this->produtos as $produto){
			printf($produto->nome.'<br>');
			printf($produto->valor.'<hr>');
		}
	}
}

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "150");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();
?>