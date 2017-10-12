<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
        $this->setPeso($peso);
    }

    
   public function getNome() {
        return $this->nome;
    }

   public function getNacionalidade() {
        return $this->nacionalidade;
    }

   public function getIdade() {
        return $this->idade;
    }

   public function getAltura() {
        return $this->altura;
    }

   public function getPeso() {
        return $this->peso;
    }

   public function getCategoria() {
        return $this->categoria;
    }

   public function getVitorias() {
        return $this->vitorias;
    }

   public function getDerrotas() {
        return $this->derrotas;
    }

   public function getEmpates() {
        return $this->empates;
    }

   public function setNome($nome) {
        $this->nome = $nome;
    }

   public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

   public function setIdade($idade) {
        $this->idade = $idade;
    }

   public function setAltura($altura) {
        $this->altura = $altura;
    }

   public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

   public function setCategoria() {
        if($this->getPeso() < 52.2){
            $this->categoria = "Invalido";
        } elseif($this->getPeso() <= 70.3){
           $this->categoria = "Leve"; 
        } elseif($this->getPeso() <= 83.9){
            $this->categoria = "Médio";
        } elseif($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Invalido";
        }
    }

   public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

   public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

   public function setEmpates($empates) {
        $this->empates = $empates;
    }
    
    public function apresentar(){
        echo "<p>------------------------------------</p>";
        echo "<p>Chegou a hora! O lutador" . $this->getNome();
        echo "veio diretamente de " . $this->getNacionalidade();
        echo "tem " . $this->getIdade() . " anos e pesa " . $this->getIdade();
        echo ",<br>ele tem " . $this->getVitorias() . " vitorias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
    }
    
    public function status(){
        echo "<p>------------------------------------</p>";
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes";
        echo " perder " . $this->getDerrotas() . " vezes e";
        echo " empatou " . $this->getEmpates() . " vezes!";
    }
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
}
