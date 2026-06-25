<?php
require_once "Aluno.php";

class Tecnico extends Aluno {
	private $registroProf;

	public function setRegistroProf($rp){
		$this->registroProf = $rp;
	}

	public function getRegistroProf(){
		return $this->registroProf;
	}

	public function praticar(){
		printf("<br> Praticando...");
	}
}

?>