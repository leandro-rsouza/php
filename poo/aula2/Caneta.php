<?php
class Caneta {
	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;
	
	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($m){
		$this->modelo = $m;
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($c){
		$this->cor = $c;
	}

	public function getPonta(){
		return $this->ponta;
	}

	public function setPonta($p){
		$this->ponta = $p;
	}

	public function getCarga(){
		return $this->carga;
	}

	public function setCarga($ca){
		$this->carga = $ca;		
	}

	public function getTampada(){
		return $this->tampada;
	}

	public function setTampada($t){
		$this->tampada = $t;		
	}

	public function tampar(){
		$this->setTampada(true);
		printf("Caneta Tampada! <br>");
	}

	public function destampar(){
		$this->setTampada(false);
		printf("Caneta Destampada! <br>");
	}

	public function rabiscar(){
		if($this->setTampada(true)){
			printf("Impossível Rabiscar Com A Caneta Tampada! <br>");
		} else {
			printf("Rabiscando... <br>");
		}
	}
}

?>