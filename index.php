<?php 
    require_once './Vistas/include/header.php';
    require_once './LogicaNegocio/PeliculasServicios.php';
   
   
    $servicios = new PeliculasServicios();
    $peliculas = $servicios->obtenerPelicula();     
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tico-Cines</title>
    </head>
    <body>
        <?php
            if(count($peliculas) >0):  
                foreach ($peliculas as $posicion => $pelicula):  ?>
        <center>
            <nav>
                <ul>
                    <li><a href="Vistas/registrarPelicula.php">Registrar Película</a></li>
                    <li><a href="Vistas/editarPelicula.php?id=<?=$pelicula->getId();?>">Editar</a></li>
                    <li><a href="Controladores/peliculaController.php?accion=eliminar&id=<?=$pelicula->getId();?>">Borrar</a></li>
                    <li><a href="Vistas/cerrarSesion.php">Salir</a></li>
                </ul>
            </nav> 
        </center> 
        <?php
                endforeach;
            endif;
                ?>
    </body>
</html>





