<?php

require_once 'Animal.php';

class Mamifero extends Animal {
    private $corPelo;
    
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
    
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

        
    public function alimentar() {
        echo "<p>Mamando</p>";
    }

    public function amitirSom() {
        echo "<p>Som de memifero</p>";
    }

    public function locomover() {
        echo "<p>Correndo</p>";
    }

}
