<?php
require_once "Lutador.php";

class Luta {
	private $desafiado; // Agregação: Atributos Abstratos do Tipo => Lutador
	private $desafiante;// Agregação: Atributos Abstratos do Tipo => Lutador
	private $aprovada;

	private function getDesafiado(){
		return $this->desafiado;
	}

	private function setDesafiado($l1){
		$this->desafiado = $l1;
	}

	private function getDesafiante(){
		return $this->desafiante;
	}

	private function setDesafiante($l2){
		$this->desafiante = $l2;
	}

	private function getAprovada(){
		return $this->aprovada;
	}

	private function setAprovada($a){
		$this->aprovada = $a;
	}

	public function marcarLuta($l1, $l2){
		if($l1->getCategoria() === $l2->getCategoria() && $l1 <> $l2){
			$this->setAprovada(true);
			$this->setDesafiado($l1);
			$this->setDesafiante($l2);
		} else {
			$this->setAprovada(false);
			$this->setDesadiado(null);
			$this->setDesafiante(null);
		}
	}

	public function lutar(){
		if($this->getAprovada() == true){
			$this->desafiado->apresentar();
				printf("<hr>");
			$this->desafiante->apresentar();
			$vencedor = rand(0,2);
				printf("<hr>");
			switch($vencedor){
				case 0:
					printf("Empate!");
					$this->desafiado->empatarLuta();
					$this->desafiante->empatarLuta();
					printf("<br>");
				break;

				case 1:
					printf("Vencedor: ".$this->desafiado->getNome());
					$this->desafiado->ganharLuta();
					$this->desafiante->perderLuta();
					printf("<br>");
				break;

				case 2:
					printf("Vencedor: ".$this->desafiante->getNome());
					$this->desafiante->ganharLuta();
					$this->desafiado->perderLuta();
					printf("<br>");
				break;
			}
		} else {
			printf("A Luta Não Pode Acontecer!");
		}
	}
}

?>