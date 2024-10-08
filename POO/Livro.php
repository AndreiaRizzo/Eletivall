<?php
class Livro{

    private $titulo;
    private $autor;
    private $ano;

    public function __construct($titulo, $autor, $ano){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->setAno($ano);
    }

    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getTitulo($titulo){
        return $this->titulo;
    }

    
    public function setAutor($autor){
        $this->autor = $autor;
    }
    public function getAutor($autor){
        return $this->autor;
    }

    
    public function setAno($ano){
        if ($ano < 1900)
            $ano = 1900;
        $this->ano = $ano;
    }
    public function getAno($ano){
        return $this->ano;
    }
} 

$obj = new Livro("O Livro", "Ana", "2024");
var_dump($obj);