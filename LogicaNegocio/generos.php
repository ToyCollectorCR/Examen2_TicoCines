<?php

class generos {
    
    private $genero;
    
    function __construct($genero) {
        $this->genero = $genero;
    }

    function getGenero() {
        return $this->genero;
    }

    function setGenero($genero) {
        $this->genero = $genero;
    }


    
}

?>