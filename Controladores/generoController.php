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
  
  function guardarGenero(){
      
      $codigogenero = $_POST['codigogenero']; 
      $nombregenero = $_POST['nombregenero'];
      
      $servicios = new GeneroServicios();
      $servicios->agregarGenero($codigogenero,$nombregenero);
  }
  
  
  
  ?>
