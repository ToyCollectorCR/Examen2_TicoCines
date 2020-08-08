<?php 
require 'include/header.php';
require '../LogicaNegocio/PeliculasServicios.php';
require '../LogicaNegocio/GeneroServicios.php';
//require '../LogicaNegocio/generos.php';

    $servicios = new GeneroServicios();
    $generospel = $servicios->obtenerGenero();    
    
?>
<body>
    <section>
        <br>
        <h1>REGISTRAR PELICULA</h1>
        <form method="post" action="../Controladores/peliculaController.php" enctype="multipart/form-data">		
            <input type="file" required="" name="afiche"/><br><br>
            <input type="text" placeholder="Código" name="codigo" required>
            <input type="text" placeholder="Titulo"  name="titulo" required>
            <input type="text" placeholder="Director"  name="director" required>
            <input type="text" placeholder="Sinopsis"  name="sinopsis" required>
            <input type="number" readonly="" value="0" name="puntuacion" required>
            <label>Genero</label>
            <select name="genero">
                <?php
                    if(count($generospel) >0):  
                        foreach ($generospel as $posicion => $genero):  ?>
                
                <option value="<?=$genero->getNombregenero();?>">
                    
                    <?=$genero->getNombregenero();?>
                    
                </option>
                
                
                <?php
                    endforeach;
                        endif;
                ?>
            </select> 
            <input type="submit" name="accion" value="registrar">
        </form>
    </section>
    </body>
</html>