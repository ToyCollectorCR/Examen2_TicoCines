<?php

require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/admin.php';

class adminServicios {
    
    private $db;  
    
    function __construct() {
        $this->db = new ConexionBD();
    }

     //Buscar usuario por correo y password
    function buscarAdmin($correo,$password){
        $this->db->getConeccion();
        $sql = "SELECT * FROM admin WHERE CORREO='$correo' AND PASSWORD='$password'";
        $registros = $this->db->executeQueryReturnData($sql);        
        $this->db->cerrarConeccion();      
        if($registros != null){
           $admin = new admin($registros[0]['nombre'],$registros[0]['cedula'],$registros[0]['telefono'],$registros[0]['correo'],$registros[0]['password']);
        }
       return $admin;
    }     
    
}
