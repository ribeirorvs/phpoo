<?php

require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao {
    
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->pagAtual = 0;
        $this->aberto = false;
    }

    
    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotPaginas() {
        return $this->totPaginas;
    }

    function getPagAtual() {
        return $this->pagAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Paginas: " . $this->totPaginas;
        echo "<br>Sendo lindo por " . $this->leitor->getNome();
    }
    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        if($this->pagAtual < $this->totPaginas){
            $this->pagAtual++;
        }
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if($p > $this->totPaginas){
            $this->pagAtual = $p;
        } else {
            $this->pagAtual = 0;
        }
    }

    public function voltarPag() {
        if($this->pagAtual > 0){
            $this->pagAtual--;
        }
    }

}
