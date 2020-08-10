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
            
            <h3>MANTENIMIENTO DE PELICULAS</h3>
            
            <nav>
                <ol>
                    <li><a href="Vistas/registrarPelicula.php">Registrar Película</a></li>
                    <li><a href="Vistas/peliculasEditar.php">Modificar Pelicula</a></li>
                    <li><a href="Vistas/eliminarPelicula.php?">Eliminar Pelicula</a></li>
                </ol>
            </nav>
            
            <h3>MANTENIMIENTO DE GENERO (Terror, Romántica, Acción, etc.):</h3>
            
            <nav>
                <ol>
                    <li><a href="Vistas/registrarGenero.php">Registrar Género</a></li>
                    <li><a href="Vistas/generosEditar.php">Modificar Género</a></li>
                    <li><a href="Vistas/listaGeneros.php?">Listar Géneros</a></li>
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





