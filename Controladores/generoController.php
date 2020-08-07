<?php   
   require dirname(__DIR__).'/LogicaNegocio/GeneroServicios.php';

  //Aquí entra el Registrar y el modificar
  if(isset($_POST['accion'])){
    switch ($_POST['accion']) {
        case 'registrar':
            guardarGenero();
            break;  
        case 'actualizar':
            actualizarGenero();
            break;  
    }
  }
  
  header("location:../index.php");
  
  function guardarGenero(){
      
      $codigogenero = $_POST['codigogenero']; 
      $nombregenero = $_POST['nombregenero'];
      
      $servicios = new GeneroServicios();
      $servicios->agregarGenero($codigogenero,$nombregenero);
  }
  
   function actualizarGenero(){
      $id = $_POST['id'];
      $codigogenero = $_POST['codigogenero'];
      $nombregenero = $_POST['nombregenero'];
      
      
      $servicios = new GeneroServicios();
      $servicios->modificarGenero($id,$codigogenero,$nombregenero);
   }
  
  ?>
