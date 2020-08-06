<?php

class generos {
    
    private $codigogenero;
    private $nombregenero;
    
    
    function __construct($codigogenero, $nombregenero) {
        $this->codigogenero = $codigogenero;
        $this->nombregenero = $nombregenero;
    }
    
    function getCodigogenero() {
        return $this->codigogenero;
    }

    function getNombregenero() {
        return $this->nombregenero;
    }

    function setCodigogenero($codigogenero) {
        $this->codigogenero = $codigogenero;
    }

    function setNombregenero($nombregenero) {
        $this->nombregenero = $nombregenero;
    }




    
}

?>