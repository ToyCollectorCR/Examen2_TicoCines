<?php 
//require 'include/header.php';
require '../LogicaNegocio/PeliculasServicios.php';


    
    
?>
<body>
    <section>
        <br>
        <h1>DALE PUNTOS A TU PELICULA</h1>
        <form action="../Controladores/peliculaController.php" method="POST">
            <h4>ID</h4>
            <input type="text" readonly="" name="codigo" value="<?php echo $_GET['id'];?>">
            <h4>Titulo</h4>
            <input type="text" readonly="" name="titulo" value="<?php echo $_GET['titulo'];?>">
            <input type="number" placeholder="Voto" name="votar" required>
            <input type="submit" name="accion" value="votar">
          </form>  
        <h1>Recuerda que la Votacion es de 1 a 10....Gracias por tu Visita</h1>
        
    </section>
    </body>
</html>