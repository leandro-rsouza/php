<?php
class ContaBanco {
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	public function __construct(){
		$this->setStatus(false);
		$this->setSaldo(0);	
	}

	public function setNumConta($n){
		$this->numConta = $n;		
	}

	public function getNumConta(){
		return $this->numConta;
	}

	public function setTipo($t){
		$this->tipo =$t;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setDono($d){
		$this->dono = $d;
	}

	public function getDono(){
		return $this->dono;
	}

	public function setSaldo($s){
		$this->saldo = $s;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setStatus($st){
		$this->status = $st;
	}

	public function getStatus(){
		return $this->status;
	}

	public function abrirConta(){
		$this->setStatus(true);
		if($this->getStatus() == true){
			if($this->getTipo() == "Corrente"){
				$this->setSaldo(50);
			} 
			if($this->getTipo() == "Poupança"){
				$this->setSaldo(150);
			}
		}
	}

	public function fecharConta(){
		if($this->getStatus() == true){		
			if($this->getSaldo() < 0 ){
				printf("Você Não Pode Fechar Sua Conta! Saldo Negativado! <br>");
			} else if ($this->getSaldo() > 0){
				printf("Você Não Pode Fechar Sua Conta! Saldo Ativo! <br>");
			} else {
				$this->setStatus(false);
				printf("Conta Desativada! <br>");
			}
		}
	}

	public function depositar($valor){
		if($this->getStatus() == true){
			$this->setSaldo($this->getSaldo() + $valor);
		} else {
			printf("É Necessário Abrir Uma Conta! <br>");
		}
	}

	public function sacar($valor){
		if($this->getStatus() == true){
			if($this->getSaldo() >= $valor){
				$this->setSaldo($this->getSaldo() - $valor);
			} else {
				printf("Saldo Insuficiente! <br>");
			}
		} else {
			printf("É Necessário Abrir Uma Conta! <br>");
		}
	}

	public function pagarMensal(){
		if($this->getStatus() == true){
			if($this->getSaldo() > 0){
				if($this->getTipo() == "Corrente"){
					$this->setSaldo($this->getSaldo() - 12);
				} 
				if($this->getTipo() == "Poupança"){
					$this->setSaldo($this->getSaldo() - 20);
				}
			}
		} else {
			printf("É Necessário Abrir Uma Conta! <br>");
		}
	}
}
?>