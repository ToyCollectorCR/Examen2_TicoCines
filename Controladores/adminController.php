<?php

  require dirname(__DIR__).'/LogicaNegocio/adminServicios.php';
  session_start();        
  
  if(isset($_POST['accion'])){
      switch ($_POST['accion']){          
          case 'Ingresar':
              $admin = validarAdmin();
              if(!empty($admin)){
                  $_SESSION['usuarioLogueado'] = $admin;
                  header('location:../index.php');
              }else{
                  header('location:../Vistas/login.php');
              }
          break;          
      }
  }

  
  function validarAdmin(){
      
    $correo = $_POST['correo']; 
    $password = $_POST['password'];
    
    $servicios = new adminServicios();
    $usuario = $servicios->buscarAdmin($correo, $password);

    return $usuario;
  }

?>