<?php
require_once 'AcoesVideo.php';
require_once 'Video.php';
require_once 'Telespectador.php';

class Visualizacao implements AcoesVideos {
    private $espectador;
    private $filme;

    public function __construct($e, $f){
        $this->setEspectador($e);
        $this->setFilme($f);
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistindo($this->espectador->getTotAssistindo() + 1);
        $this->espectador->ganharExp();
    }

    public function setEspectador($e){
        $this->espectador = $e;
    }

    public function getEspectador(){
        return $this->espectador;
    }

    public function setFilme($f){
        $this->filme = $f;
    }

    public function getFilme(){
        return $this->filme;
    }

    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($n){
        $this->filme->setAvaliacao($n);
    }

    public function avaliarEmPorc($p){
        $nova = 0;
        if($p <= 20){
            $nova = 3;
        } else if(p <= 50){
            $nova = 5;
        } else if(p <= 90){
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }

    public function play(){
        $this->filme->setReproduzindo(true);
    }

    public function pause(){
        $this->filme->setReproduzindo(false);
    }

    public function like(){
        $this->filme->setCurtidas($this->filme->getCurtidas() + 1);
    }
}   

?>