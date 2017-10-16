<?php

require_once 'Animal.php';

class Reptil extends Animal{
    private $corEscama;
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function alimentar() {
        echo "<p>Comendo</p>";
    }

    public function amitirSom() {
        echo "<p>Som de reptil</p>";
    }

    public function locomover() {
        echo "<p>Se arrastando</p>";
    }

}
