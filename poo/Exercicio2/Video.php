<?php

class Video {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($t){
        $this->setTitulo($t);
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function setTitulo($t){
        $this->titulo = $t;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAvaliacao($avaliacao){  
        $media = ($this->avaliacao + $avaliacao)/$this->views;
        $this->avaliacao = $media;
    }

    public function getAvaliacao(){
        return $this->avaliacao;
    }

    public function setViews($v){
        $this->views = $v;
    }

    public function getViews(){
        return $this->views;
    }

    public function setCurtidas($c){
        $this->curtidas = $c;
    }

    public function getCurtidas(){
        return $this->curtidas;
    }

    public function setReproduzindo($r){
        $this->reproduzindo = $r;
    }

    public function getReproduzindo(){
        return $this->reproduzindo;
    }
}

?>