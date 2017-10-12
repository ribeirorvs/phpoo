<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    public $tampada;
    
    public function __construct($m, $c, $p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampada = true;
    }
    
    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta) {
        $this->ponta = $ponta;
    }

    function getCor() {
        return $this->cor;
    }

    function getTampada() {
        return $this->tampada;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setTampada($tampada) {
        $this->tampada = $tampada;
    }

}
