<?php 
  require 'include/header.php';
  require dirname(__DIR__).'/LogicaNegocio/PeliculasServicios.php';
  
  if(isset($_GET['id'])){
      $id  = $_GET['id'];
      $servicios = new PeliculasServicios();
      $pelicula = $servicios->obtenerPeliculaById($id);
  }
?>
    <body>
    <section>
        <br>
        <h1>EDITAR PELICULA</h1>
        <form method="post" action="../Controladores/peliculaController.php">		
            <input type="file" required="" name="afiche"/><br><br>
            <input type="text" placeholder="Código" name="codigo" required>
            <input type="text" placeholder="Titulo"  name="titulo" required>
            <input type="text" placeholder="Director"  name="director" required>
            <input type="text" placeholder="Sinopsis"  name="sinopsis" required>
            <input type="number" placeholder="Puntuacion"  name="puntuacion" required>                
            <input type="submit" name="accion" value="actualizar">
        </form>
    </section>
    </body>
</html>
