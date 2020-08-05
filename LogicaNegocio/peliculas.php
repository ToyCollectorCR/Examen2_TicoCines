<?php

class peliculas {
    
    private $id;
    private $afiche;
    private $codigo;
    private $titulo;
    private $director;
    private $sinopsis;
    private $puntuacion;
    
    function __construct($id, $afiche, $codigo, $titulo, $director, $sinopsis, $puntuacion) {
        $this->id = $id;
        $this->afiche = $afiche;
        $this->codigo = $codigo;
        $this->titulo = $titulo;
        $this->director = $director;
        $this->sinopsis = $sinopsis;
        $this->puntuacion = $puntuacion;
    }

    function getId() {
        return $this->id;
    }

    function getAfiche() {
        return $this->afiche;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDirector() {
        return $this->director;
    }

    function getSinopsis() {
        return $this->sinopsis;
    }

    function getPuntuacion() {
        return $this->puntuacion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setAfiche($afiche) {
        $this->afiche = $afiche;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDirector($director) {
        $this->director = $director;
    }

    function setSinopsis($sinopsis) {
        $this->sinopsis = $sinopsis;
    }

    function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;
    }


  
}


?>
