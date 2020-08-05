<?php
require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/peliculas.php';

class PeliculasServicios {
    
    private $db;
    
        function __construct() {
        $this->db = new ConexionBD();
    }
    
    function agregarPelicula($codigo, $titulo, $director, $sinopsis, $puntuacion){
        $this->db->getConeccion();
        $afiche = addslashes(file_get_contents($_FILES['afiche']['tmp_name']));
        $sql = "INSERT INTO peliculas(afiche,codigo,titulo,director,sinopsis,puntuacion) VALUES(?,?,?,?,?,?)";
        $paramType = 'sss';
        $paramValue = array($afiche, $codigo, $titulo, $director, $sinopsis, $puntuacion);
        
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
    function modificarPelicula($id,$codigo, $titulo, $director, $sinopsis, $puntuacion) {
        $this->db->getConeccion();
        $afiche = addslashes(file_get_contents($_FILES['afiche']['tmp_name']));
        $sql = "UPDATE peliculas SET AFICHE = ?,CODIGO = ?,TITULO = ?,DIRECTOR = ?,SINOPSIS = ?,PUNTUACION = ? WHERE ID = ?";
        $paramType = "sssi";
        $paramValue = array($afiche, $codigo, $titulo, $director, $sinopsis, $puntuacion, $id);
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }
    
    function eliminarPelicula($id) {
        $this->db->getConeccion();
        $sql = "DELETE FROM peliculas WHERE id = ?";
        $paramType = "i";
        $paramValue = array($id);
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
    }    
   
    function obtenerPelicula() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM peliculas ORDER BY id";
        $registros = $this->db->executeQueryReturnData($sql);
        $peliculas =array();
        
        foreach ($registros as $posicion => $row){
            $pelicula = new peliculas($row['id'],$row['afiche'],$row['codigo'],$row['titulo'],$row['director'],$row['sinopsis'],$row['puntuacion']);
            array_push($peliculas, $pelicula);
        }
        $this->db->cerrarConeccion();        
        return $peliculas;
    } 
    
    function obtenerPeliculaById($id) {
        $this->db->getConeccion();
        $sql = "SELECT * FROM peliculas WHERE ID = $id";
        $registros = $this->db->executeQueryReturnData($sql);
        $this->db->cerrarConeccion();
        
        $pelicula = new peliculas($registros[0]['id'],$registros[0]['afiche'],$registros[0]['codigo'],$registros[0]['titulo'],$registros[0]['director'],$registros[0]['sinopsis'],$registros[0]['puntuacion']);
        return $pelicula;
    }
    
    
    
}
