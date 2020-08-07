<?php
require dirname(__DIR__).'/BaseDatos/ConexionBD.php';
require dirname(__DIR__).'/LogicaNegocio/peliculas.php';

class PeliculasServicios {
    
    private $db;
    
        function __construct() {
        $this->db = new ConexionBD();
    }
    
    function agregarPelicula($afiche, $codigo, $titulo, $director, $sinopsis, $puntuacion,$genero){
        $this->db->getConeccion();
        
        $sql = "INSERT INTO peliculas(afiche,codigo,titulo,director,sinopsis,puntuacion,genero) VALUES(?,?,?,?,?,?,?)";
        $paramType = 'sssssis';
        $paramValue = array($afiche, $codigo, $titulo, $director, $sinopsis, $puntuacion,$genero);
        
        $this->db->executeQuery($sql, $paramType, $paramValue);
        $this->db->cerrarConeccion();
        
    }
    
    function modificarPelicula($id,$afiche,$codigo, $titulo, $director, $sinopsis, $puntuacion,$genero) {
        $this->db->getConeccion();
        
        $sql = "UPDATE peliculas SET AFICHE = ?,CODIGO = ?,TITULO = ?,DIRECTOR = ?,SINOPSIS = ?,PUNTUACION = ?,GENERO = ? WHERE ID = ?";
        $paramType = "sssssisi";
        $paramValue = array($afiche, $codigo, $titulo, $director, $sinopsis, $puntuacion,$genero, $id);
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
            $pelicula = new peliculas($row['id'],$row['afiche'],$row['codigo'],$row['titulo'],$row['director'],$row['sinopsis'],$row['puntuacion'],$row['genero']);
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
        
        $pelicula = new peliculas($registros[0]['id'],$registros[0]['afiche'],$registros[0]['codigo'],$registros[0]['titulo'],$registros[0]['director'],$registros[0]['sinopsis'],$registros[0]['puntuacion'],$registros[0]['genero']);
       
        return $pelicula;
    }
    
     function buscaPelicula() {
        $this->db->getConeccion();        
        $sql = "SELECT * FROM peliculas WHERE titulo LIKE '%$busqueda%'";
        $registros = $this->db->executeQueryReturnData($sql);
        $peliculas =array();
        
        foreach ($registros as $posicion => $row){
            $pelicula = new peliculas($row['id'],$row['afiche'],$row['codigo'],$row['titulo'],$row['director'],$row['sinopsis'],$row['puntuacion'],$row['genero']);
            array_push($peliculas, $pelicula);
        }
        $this->db->cerrarConeccion();        
        return $peliculas;
    } 
    
    
    
    
}
