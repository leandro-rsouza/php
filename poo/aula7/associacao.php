<?php
class Cliente {
	public $nome;
	public $endereco;
}

class Pedido {
	public $numero;
	public $cliente;
}

$cliente = new Cliente();
$cliente->nome = "Carlos Leandro";
$cliente->endereco = "Rua do Araxá, 1204";

$pedido = new Pedido();
$pedido->numero = "451263";
$pedido->cliente = $cliente; // Associação: Atributo Abstrato => Cliente

$dados = array(
	'numero' => $pedido->numero,
	'nome_cliente' => $pedido->cliente->nome,
	'endereco_cliente' => $pedido->cliente->endereco
);


?>