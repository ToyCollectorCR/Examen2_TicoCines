<?php 
require 'include/header.php';
//require '../LogicaNegocio/PeliculasServicios.php';
require '../LogicaNegocio/GeneroServicios.php';
//require '../LogicaNegocio/generos.php';

    $servicios = new GeneroServicios();
    $generospel = $servicios->obtenerGenero();    
    
?>
<body>
    <section>
        <br>
        <h1>REGISTRAR GENERO</h1>
        <form method="post" action="../Controladores/generoController.php">		
            <input type="text" placeholder="Código Género" name="codigogenero" required>
            <input type="text" placeholder="Nombre Genero"  name="nombregenero" required>
            <input type="submit" name="accion" value="registrar">
        </form>
    </section>
    </body>
</html>