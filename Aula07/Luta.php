<?php
require_once 'Lutador.php';
class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

    public function marcarLuta($desafiado, $desafiante){
        if($desafiado->getCategoria() === $desafiante->getCategoria() 
                && $desafiado != $desafiante){
            $this->setAprovada(true);
            $this->setDesafiado($desafiado);
            $this->setDesafiante($desafiante);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }
    
    public function lutar(){
        if($this->getAprovada()){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo "<p>Empatou!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>" . $this->desafiado->getNome() . " ganhou!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>" . $this->desafiante->getNome() . " ganhou!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }
}
