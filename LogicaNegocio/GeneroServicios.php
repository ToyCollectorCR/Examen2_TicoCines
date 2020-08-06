<?php
require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/generos.php';

class GeneroServicios {
    
     private $db;
    
        function __construct() {
        $this->db = new ConexionBD();
    }
    
    function obtenerGenero() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM generos ORDER BY codigogenero";
        $registros = $this->db->executeQueryReturnData($sql);
        $generospel = array();
        
        foreach ($registros as $posicion => $row){
            $genero = new generos($row['codigogenero'],$row['nombregenero']);
            array_push($generospel, $genero);
        }
        $this->db->cerrarConeccion();        
        return $generospel;
    } 
    
}
