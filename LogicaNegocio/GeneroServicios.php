<?php
//require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/generos.php';

class GeneroServicios {
    
     private $db;
    
        function __construct() {
        $this->db = new ConexionBD();
    }
    
    function agregarGenero($codigogenero, $nombregenero){
        $this->db->getConeccion();
        
        $sql = "INSERT INTO generos(codigogenero,nombregenero) VALUES(?,?)";
        $paramType = 'ss';
        $paramValue = array($codigogenero, $nombregenero);
        
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
        function modificarGenero($id,$codigogenero,$nombregenero) {
        $this->db->getConeccion();
        
        $sql = "UPDATE generos SET codigogenero = ?, nombregenero = ? WHERE ID = ?";
        $paramType = "ssi";
        $paramValue = array($codigogenero,$nombregenero, $id);
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function obtenerGenero() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM generos ORDER BY id";
        $registros = $this->db->executeQueryReturnData($sql);
        $generospel = array();
        
        foreach ($registros as $posicion => $row){
            $genero = new generos($row['id'],$row['codigogenero'],$row['nombregenero']);
            array_push($generospel, $genero);
        }
        $this->db->cerrarConeccion();        
        return $generospel;
    }
    
     function obtenerGeneroById($id) {
        $this->db->getConeccion();
        $sql = "SELECT * FROM generos WHERE ID = $id";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        $genero = new generos($registros[0]['id'],$registros[0]['codigogenero'],$registros[0]['nombregenero']);
       
        return $genero;
    }
    
}
