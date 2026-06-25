<?php
require_once 'Pessoa.php';

class Telespectador extends Pessoa {
    private $login;
    private $totAssistindo;

    public function __construct($n, $i, $s, $l){
        parent::__construct($n, $i, $s);
        $this->setLogin($l);
        $this->setTotAssistindo(0);
    }

    public function setLogin($l){
        $this->login = $l;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setTotAssistindo($ta){
        $this->totAssistindo = $ta;
    }

    public function getTotAssistindo(){
        return $this->totAssistindo;
    }

    public function viuMaisUm(){
        $this->totAssistindo ++;
    }
}
?>