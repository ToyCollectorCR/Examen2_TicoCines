<?php 
    //require_once './Vistas/include/header.php';
    require_once __DIR__.'/LogicaNegocio/PeliculasServicios.php';
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
        <nav>
            <ul>
                <li><a href="Vistas/registrarLibro.php">Registrar</a></li>
                <li><a href="Vistas/cerrarSesion.php">Salir</a></li>
                <li><a href="Vistas/login.php">Admin Login</a></li>
            </ul>
        </nav> 
        <section>
            <br>
            <h1>Lista de Peliculas</h1>
            <table id="t1" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Afiche</th>
                        <th>Código</th>
                        <th>Título</th>
                        <th>Director</th>
                        <th>Sinopsis</th>
                        <th>Puntuación</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(count($peliculas) >0):  
                        foreach ($peliculas as $posicion => $pelicula):  ?>
                            <tr>
                                <td><?=$pelicula->getId();?></td>
                                <td><img height="150px" src="data:image/jpg;base64,<?php echo base64_encode($row['afiche'])?>"/> </td>
                                <td><?=$pelicula->getCodigo();?></td>
                                <td><?=$pelicula->getTitulo();?></td>
                                <td><?=$pelicula->getDirector();?></td>
                                <td><?=$pelicula->getSinopsis();?></td>
                                <td><?=$pelicula->getPuntuacion();?></td>
                                <td><a href="Vistas/editarLibro.php?id=<?=$libro->getId();?>">Editar</a></td>
                                <td><a href="Controladores/libroController.php?accion=eliminar&id=<?=$libro->getId();?>">Borrar</a></td>
                            </tr>
                <?php
                       endforeach;
                    endif;
                ?>
                </tbody>
            </table>
        </section>                
    </body>
</html>





