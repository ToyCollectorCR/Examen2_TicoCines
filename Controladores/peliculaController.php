<?php   
   require dirname(__DIR__).'/LogicaNegocio/PeliculasServicios.php';

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarPelicula();
            break;  
        case 'actualizar':
            actualizarPelicula();
            break;  
    }
  }

  //Aquí entra el Eliminar
  if(isset($_GET['accion'])){
    switch ($_GET['accion']) {
        case 'eliminar':
            eliminarPelicula();            
            break;          
    }
  }  
  header("location:../index.php");
  
  function guardarPelicula(){
      $afiche = $_POST['afiche'];
      $codigo = $_POST['codigo'];
      $titulo = $_POST['titulo'];
      $director = $_POST['director'];
      $sinopsis = $_POST['sinopsis'];
      $puntuacion = $_POST['puntuacion'];
       
      $servicios = new PeliculasServicios();
      $servicios->agregarPelicula($afiche,$codigo,$titulo,$director,$sinopsis,$puntuacion);
  }
  
  function eliminarPelicula(){
      $id = $_GET['id'];
       
      $servicios = new PeliculasServicios();
      $servicios->eliminarPelicula($id);
  }

  function actualizarPelicula(){
      $id = $_POST['id'];
      $afiche = $_POST['afiche'];
      $codigo = $_POST['codigo'];
      $titulo = $_POST['titulo'];
      $director = $_POST['director'];
      $sinopsis = $_POST['sinopsis'];
      $puntuacion = $_POST['puntuacion'];
      
      $servicios = new LibroServicios();
      $servicios->modificarPelicula($id,$afiche,$codigo,$titulo,$director,$sinopsis,$puntuacion);
  }  

?>