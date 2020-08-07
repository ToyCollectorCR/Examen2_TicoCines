<?php 
    require_once './Vistas/include/header.php';
    //require_once './Controladores/peliculaController.php';
    //require_once './LogicaNegocio/PeliculasServicios.php';
   
    //$servicios = new PeliculasServicios();
    //$peliculas = $servicios->obtenerPelicula();     
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tico-Cines</title>
    </head>
    <body>
        
        <center>
            
            <h3>MANTENIMIENTO PELICULAS</h3>
            
            <nav>
                <ol>
                    <li><a href="Vistas/registrarPelicula.php">Registrar Películas</a></li>
                    <li><a href="Vistas/peliculasEditar.php">Editar Peliculas</a></li>
                    <li><a href="Vistas/eliminarPelicula.php?">Borrar Peliculas</a></li>
                </ol>
            </nav>
            
            <h3>MANTENIMIENTO GENEROS</h3>
            
            <nav>
                <ol>
                    <li><a href="Vistas/registrarGenero.php">Registrar Género</a></li>
                    <li><a href="Vistas/generosEditar.php">Editar Género</a></li>
                    <li><a href="Vistas/listaGeneros.php?">Listar Género</a></li>
                </ol>
            </nav>
            
            <nav>
                <ul>
                    <li><a href="Vistas/cerrarSesion.php">Salir</a></li>                    
                </ul>
            </nav>
        </center> 

    </body>
</html>





