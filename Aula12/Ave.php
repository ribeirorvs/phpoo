<?php

require_once 'Animal.php';

class Ave extends Animal {
    private $corPena;
    
    public function fazerNinho(){
        echo "<p>Fazendo ninho</p>";
    }
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
    
    public function alimentar() {
        echo "<p>Comendo</p>";
    }

    public function amitirSom() {
        echo "<p>Som de ave</p>";
    }

    public function locomover() {
        echo "<p>Voando</p>";
    }

}
