<?php 
    require_once './Vistas/include/header.php';
    //require_once './Controladores/peliculaController.php';
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
                    <li><a href="Vistas/registrarPelicula.php">Registrar Películas</a></li>
                    <li><a href="Vistas/editarPelicula.php?id=<?=$pelicula->getId();?>">Editar Peliculas</a></li>
                    <li><a href="Vistas/eliminarPelicula.php?id=<?=$pelicula->getId();?>">Borrar Peliculas</a></li>
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





