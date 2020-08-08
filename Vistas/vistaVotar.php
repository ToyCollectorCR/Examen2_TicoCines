<?php 
//require 'include/header.php';
require '../LogicaNegocio/PeliculasServicios.php';


    
    
?>
<body>
    <section>
        <br>
        <h1>DALE PUNTOS A TU PELICULA</h1>
        <form action="../Controladores/peliculaController.php" method="POST">
            <input type="text" readonly="" name="codigo" value="<?php echo $_GET['id'];?>">
            <input type="text" readonly="" name="titulo" value="<?php echo $_GET['titulo'];?>">
            <input type="number" placeholder="Voto" name="votar" required>
            <input type="submit" name="accion" value="votar">
          </form>   
        
    </section>
    </body>
</html>