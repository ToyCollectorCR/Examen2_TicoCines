<?php 
    require_once './Vistas/include/header.php';
    //require_once 'Vistas/login.php';
    //require_once __DIR__.'/LogicaNegocio/PeliculasServicios.php';
   // $servicios = new PeliculasServicios();
   // $peliculas = $servicios->obtenerPelicula();     
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tico-Cines</title>
    </head>
    <body>
        <center>
            <nav>
                <ul>
                    <li><a href="Vistas/registrarPelicula.php">Registrar Película</a></li>
                    <li><a href="Vistas/editarPelicula.php">Modificar Película</a></li>
                    <li><a href="Controladores/peliculaController.php?accion=eliminar&id=<?=$pelicula->getId();?>">Eliminar Película</a></li>
                    <li><a href="Vistas/cerrarSesion.php">Salir</a></li>
                </ul>
            </nav> 
        </center>                      
    </body>
</html>





