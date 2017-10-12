<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com Sucesso!</p>";
    }
    
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    public function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);
        if($tipo == "CC"){
            $this->setSaldo(50);
        } else {
            $this->setSaldo(150);
        }
    }
    
    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>ERRO! COnta ainda tem saldo</p>";
        } elseif($this->getSaldo() < 0){
            echo "<p>Conta em debito</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta fechada com sucesso</p>";
        }
    }
    
    public function depositar($saldo){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $saldo);
            echo "<p>Deposito de R$ $saldo,00 realizado na conta {$this->getDono()}</p>";
        } else {
            echo "<p>Impossivel depositar, conta fechada</p>";
        }
    }
    
    public function sacar($saldo){
        if($this->getStatus() == true){
            if($this->getSaldo() >= $saldo){
                $this->setSaldo($this->getSaldo() - $saldo);
                echo "<p>Saque de R$ $saldo,00 autorizado na conta de {$this->getDono()}</p>";
            } else {
                echo "<p>Saldo insuficiente</p>";
            }
        } else {
            echo "<p>Impossivel sacar, conta fechada</p>";
        }
    }
    
    public function pagarMensal(){
        if($this->getStatus() == true){
            if($this->getTipo() == "CC"){
                $v = 12;
            } else {
                $v = 20;
            }
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p>Mensalidade de R$ $v,00 debitado na conta de {$this->getDono()}</p>";
        } else {
            echo "<p>Conta fechada</p>";
        }
    }
    
}
