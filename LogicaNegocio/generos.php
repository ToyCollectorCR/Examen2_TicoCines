<?php

class generos {
    
    private $id;
    private $codigogenero;
    private $nombregenero;
    
    function __construct($id, $codigogenero, $nombregenero) {
        $this->id = $id;
        $this->codigogenero = $codigogenero;
        $this->nombregenero = $nombregenero;
    }
    
    function getId() {
        return $this->id;
    }

    function getCodigogenero() {
        return $this->codigogenero;
    }

    function getNombregenero() {
        return $this->nombregenero;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigogenero($codigogenero) {
        $this->codigogenero = $codigogenero;
    }

    function setNombregenero($nombregenero) {
        $this->nombregenero = $nombregenero;
    }



    
}
