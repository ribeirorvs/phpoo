<?php

require_once 'Animal.php';

class Peixe extends Animal {
    private $corEscama;

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function solvarBolha(){
        echo "<p>Soltando bolhas...</p>";
    }
    
    public function alimentar() {
        echo "<p>Comendo</p>";
    }

    public function amitirSom() {
        echo "<p>Peixe não emite som</p>";
    }

    public function locomover() {
        echo "<p>Nadando</p>";
    }

}
