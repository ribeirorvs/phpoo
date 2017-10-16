<?php

require_once 'Aluno.php';

class Bolsista extends Aluno {
    private $bolsa;
    
    public function removerBolsa(){
        echo "<p>Renovar bolsa</p>";
    }
    
    public function pagarMensalidade(){
        echo "<p>Aluno bolsista! Pagamento de mensalidade facilitado";
    }
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }

}
