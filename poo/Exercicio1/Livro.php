<?php
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao {
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;

	public function __construct($t,$a,$tp,$l){
		$this->setTitulo($t);
		$this->setAutor($a);
		$this->setTotPaginas($tp);
		$this->setLeitor($l);
		$this->setAberto(false);
		$this->setPagAtual(0);
	}

	private function getTitulo(){
		return $this->titulo;
	}

	private function setTitulo($t){
		$this->titulo = $t;
	}

	private function getAutor(){
		return $this->autor;
	}

	private function setAutor($a){	
		$this->autor = $a;
	}

	private function getTotPaginas(){
		return $this->totPaginas;
	}

	private function setTotPaginas($tp){
		$this->totPaginas = $tp;
	}

	private function getPagAtual(){
		return $this->pagAtual;
	}

	private function setPagAtual($pa){
		$this->pagAtual = $pa;
	}

	private function getAberto(){
		return $this->aberto;
	}

	private function setAberto($a){
		$this->aberto = $a;
	}

	private function getLeitor(){
		return $this->leitor;
	}

	private function setLeitor($l){
		$this->leitor = $l;
	}

	public function detalhes(){
		printf("<hr> Livro: ". $this->getTitulo()." Escrito Por ".$this->getAutor());
		printf("<br> Total de Páginas: ".$this->getTotPaginas());
		printf("<br> Sendo Lido Por ".$this->leitor->getNome());
	}

	public function abrir() {
		$this->setAberto(true);
		printf("<br> <br> Livro Aberto!");
	}
	
	public function fechar() {
		$this->setAberto(false);

		printf("<br> <br> Livro Fechado!");
	}
	
	public function folhear($p) {
		if($this->getAberto() == true){
			printf("<br>");
			if($p>$this->getTotPaginas() || $p<0) {
				printf("<br> Impossível Folhear, Número de Páginas É Inválido!");
			} else {
				$this->setPagAtual($p);
				printf("<br> Página Atual: ".$this->getPagAtual());
			}
		} else {
			printf("<br> <br> Abra O Livro!");
		}
	}
	
	public function avancarPag() {
		if($this->getAberto() == true){
			printf("<br>");
			if($this->getPagAtual()<0 || $this->getPagAtual()>=$this->getTotPaginas()){
				printf("<br> Impossível Folhear, Número de Páginas É Inválido!");
			} else {
				$this->setPagAtual($this->getPagAtual()+1);
				printf("<br> Página Atual: ".$this->getPagAtual());
			}
		} else {
			printf("<br>");
			printf("<br> Abra O Livro!");
		}
	}

	public function voltarPag() {
		if($this->getAberto() == true){
			printf("<br>");
			if($this->getPagAtual()<=0 || $this->getPagAtual()>$this->getTotPaginas()){
				printf("<br> Impossível Folhear, Número de Páginas É Inválido!");
			} else {
				$this->setPagAtual($this->getPagAtual()-1);
				printf("<br> Página Atual: ".$this->getPagAtual());
			}
		} else {
			printf("<br> <br> Abra O Livro!");
		}
	}
}

?>