<?php 
    //require_once '/Vistas/include/header.php';
    require_once '../LogicaNegocio/GeneroServicios.php';
    $servicios = new GeneroServicios();
    $generos = $servicios->obtenerGenero();     
?>
    <body>

        <section>
            <center>
            <br>
            <h1>Lista De Generos</h1>
            <table id="t1" border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        

                    </tr>
                </thead>
                <tbody>
                <?php
                    if(count($generos) >0):  
                        foreach ($generos as $posicion => $genero):  ?>
                            <tr>
                                <td><?=$genero->getId();?></td>
                                <td><?=$genero->getCodigogenero();?></td>
                                <td><?=$genero->getNombregenero();?></td>
                            </tr>
                <?php
                       endforeach;
                    endif;
                ?>
                </tbody>
            </table>
            </center>
        </section>                
    </body>
</html>