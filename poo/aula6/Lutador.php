<?php
class Lutador {
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;

	public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
		$this->setNome($no);
		$this->setNacionalidade($na);
		$this->setIdade($id);
		$this->setAltura($al);
		$this->setPeso($pe);
		$this->setVitorias($vi);
		$this->setDerrotas($de);
		$this->setEmpates($em);
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($no){		
		$this->nome = $no;
	}

	public function getNacionalidade(){
		return $this->nacionalidade;
	}

	public function setNacionalidade($na){
		$this->nacionalidade = $na;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($id){
		$this->idade = $id;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setAltura($al){
		$this->altura = $al;
	}

	public function getPeso(){
		return $this->peso;
	}

	public function setPeso($pe){
		$this->peso = $pe;
		$this->setCategoria();
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria(){
		if($this->getPeso() < 52.5){
			$this->categoria = "Peso Inválido";
		} else if($this->getPeso() <= 70.3){
			$this->categoria = "Leve";
		} else if($this->getPeso() <= 83.9){
			$this->categoria = "Médio";
		} else if($this->getPeso() <= 120.2){
			$this->categoria = "Pesado";			
		} else {
			$this->categoria = "Peso Inválido";
		}
	}

	public function getVitorias(){
		return $this->vitorias;
	}
	
	public function setVitorias($vi){
		$this->vitorias = $vi;
	}

	public function getDerrotas(){
		return $this->derrotas;
	}

	public function setDerrotas($de){
		$this->derrotas = $de;
	}

	public function getEmpates(){
		return $this->empates;
	}

	public function setEmpates($em){
		$this->empates = $em;
	}

	public function apresentar(){
		printf("Nome: ".$this->getNome()."<br>");
		printf("Origem: ".$this->getNacionalidade()."<br>");
		printf($this->getIdade()." Anos <br>");
		printf("Altura: ".$this->getAltura()."<br>");
		printf("Pesando: ".$this->getPeso()."<br>");
		printf("Ganhou: ".$this->getVitorias()."<br>");
		printf("Perdeu: ".$this->getDerrotas()."<br>");
		printf("Empatou: ".$this->getEmpates()."<br>");
	}

	public function status(){
		printf("<br>".$this->getNome()."<br>");
		printf("É Um Peso ".$this->getCategoria()."<br>");
		printf($this->getVitorias()." Vitórias <br>");
		printf($this->getDerrotas()." Derrotas <br>");
		printf($this->getEmpates()." Empates <br>");
	}

	public function ganharLuta(){
		$this->setVitorias($this->getVitorias() + 1);
	}

	public function perderLuta(){
		$this->setDerrotas($this->getDerrotas() + 1);
	}

	public function empatarLuta(){
		$this->setEmpates($this->getEmpates() + 1);
	}

}


?>