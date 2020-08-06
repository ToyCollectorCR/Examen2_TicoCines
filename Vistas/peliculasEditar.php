<?php 
    //require_once '/Vistas/include/header.php';
    require_once '../LogicaNegocio/PeliculasServicios.php';
    $servicios = new PeliculasServicios();
    $peliculas = $servicios->obtenerPelicula();     
?>
    <body>

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
                        <th>Género</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                <?php
                    if(count($peliculas) >0):  
                        foreach ($peliculas as $posicion => $pelicula):  ?>
                            <tr>
                                <td><?=$pelicula->getId();?></td>
                                <td><img height="150px" src="data:image/jpg;base64,<?php echo base64_encode($pelicula->getAfiche());?>"/></td>
                                <td><?=$pelicula->getCodigo();?></td>
                                <td><?=$pelicula->getTitulo();?></td>
                                <td><?=$pelicula->getDirector();?></td>
                                <td><?=$pelicula->getSinopsis();?></td>
                                <td><?=$pelicula->getPuntuacion();?></td>
                                <td><?=$pelicula->getGenero();?></td>
                                <td><a href="../Vistas/editarPelicula.php?id=<?=$pelicula->getId();?>">Editar</a></td>
                                
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