<?php
require_once "Controlador.php";

class ControleRemoto implements Controlador {
	private $volume;
	private $ligado;
	private $tocando;

	public function __construct(){
		$this->setVolume(50);
		$this->setLigado(false);
		$this->setTocando(false);
	}

	private function setVolume($v){
		$this->volume = $v;
	}

	private function getVolume(){
		return $this->volume;
	}

	private function setLigado($l){
		$this->ligado = $l;
	}

	private function getLigado(){
		return $this->ligado;
	}

	private function setTocando($t){
		$this->tocando = $t;
	}

	private function getTocando(){
		return $this->tocando;
	}

	public function ligar(){
		$this->setLigado(true);
	}

	public function desligar(){
		$this->setLigado(False);
	}

	public function play(){
		if($this->getLigado() == true){	
			if($this->getTocando() == false){
				$this->setTocando(true);
				printf("Tocando Uma Música... <br>");
			} else {
				printf("Já Tocando Uma Música! <br>");
			}
		} else {
			printf("Ligue O Aparelho! <br>");
		}
	}

	public function pause(){
		if($this->getLigado() == true) {
			if($this->getTocando() == true){
				$this->setTocando(false);
				printf("Tocador Em Pause... <br>");
			} else {
				printf("Já Em Pause! <br>");
			}
		} else {
			printf("Ligue O Aparelho! <br>");
		}
	}	

	public function aumentarVol(){
		if($this->getLigado() == true){
			$this->setVolume($this->getVolume() + 1);
		} else {
			printf("Ligue O Aparelho! <br>");
		}
	}

	public function menosVol(){
		if($this->getLigado() == true){
			$this->setVolume($this->getVolume() - 1);
		} else {
			printf("Ligue O Aparelho! <br>");
		}
	}

	public function ligarMudo(){
		if($this->getLigado() == true){
			$this->setVolume(0);
		} else {
			printf("Ligue O Aparelho! <br>");
		}
	}

	public function desligarMudo(){
		if($this->getLigado() == true){
			$this->setVolume(50);
		} else {
			printf("Ligue O Aparelho! <br>");
		}
	}

	public function abrirMenu(){
		if($this->getLigado() == true){
			printf($this->getTocando());
			printf("Volume: ".$this->getVolume()." ");
			for($i=1; $i <= $this->getVolume(); $i+=10){
				printf("|");
			}
			printf("<br>");
		} else {
			printf("Ligue O Aparelho! <br>");
		}
	}

	public function fecharMenu(){
		if($this->getLigado() == true){
			printf("Fechando O Menu! <br>");
		} else {
			printf("Ligue O Aparelho! <br>");
		}
	}
}

?>