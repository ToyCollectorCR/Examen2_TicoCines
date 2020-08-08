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
                case 'votar':
            votacion();
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
      
      
      $afiche = file_get_contents($_FILES['afiche']['tmp_name']);
      $codigo = $_POST['codigo'];
      $titulo = $_POST['titulo'];
      $director = $_POST['director'];
      $sinopsis = $_POST['sinopsis'];
      $puntuacion = $_POST['puntuacion'];
      $genero = $_POST['genero'];
      
      $registro = new peliculas(0,$afiche,$codigo,$titulo,$director,$sinopsis,$puntuacion,$genero);
      
      $servicios = new PeliculasServicios();
      $servicios->agregarPelicula($registro);
  }
  
  function eliminarPelicula(){
      $id = $_GET['id'];
       
      $servicios = new PeliculasServicios();
      $servicios->eliminarPelicula($id);
  }

  function actualizarPelicula(){
      $id = $_POST['id'];
      $afiche = file_get_contents($_FILES['afiche']['tmp_name']);
      $codigo = $_POST['codigo'];
      $titulo = $_POST['titulo'];
      $director = $_POST['director'];
      $sinopsis = $_POST['sinopsis'];
      $puntuacion = $_POST['puntuacion'];
      $genero = $_POST['genero'];
      
      $modificar = new peliculas($id,$afiche,$codigo,$titulo,$director,$sinopsis,$puntuacion,$genero);
       
      $servicios = new PeliculasServicios();
      $servicios->modificarPelicula($modificar);
  }  
  
  function votacion(){

      $id = $_POST['codigo'];
      $voto = $_POST['votar'];
      
      $servicios = new PeliculasServicios();
      $pelicula = $servicios->obtenerPeliculaById($id);
      $pelicula->setPuntuacion($pelicula->getPuntuacion()+ $voto);
      $servicios->modificarPelicula($pelicula);
      
  }
  

?>