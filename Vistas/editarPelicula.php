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
    <h3>AQUI PUEDE EDITAR LAS PELICULAS YA EXISTENTES</h3>
    <form method="post" action="../Controladores/peliculaController.php" enctype="multipart/form-data">
        <table id="t1" border="1">
            <thead>
                
                <tr>
                    <th>ID</th>
                    <th>Afiche</th>
                    <th>Código</th>
                    <th>Titulo</th>
                    <th>Director</th>
                    <th>Sinopsis</th>
                    <th>Puntuacion</th>
                    <th></th>
                    
                    
                </tr>

            </thead>
            
            <tbody>
                
                <td><input type="text"  name="id" readonly="" value="<?=$pelicula->getId();?>"></td>       
                <td><input type="file" required="" name="afiche"/></td>      
                <td><input type="text" placeholder="Código" name="codigo" required value="<?=$pelicula->getCodigo();?>"></td>       
                <td><input type="text" placeholder="Titulo"  name="titulo" required value="<?=$pelicula->getTitulo();?>"> </td>       
                <td><input type="text" placeholder="Director"  name="director" required value="<?=$pelicula->getDirector();?>"></td>
                <td><input type="text" placeholder="Sinopsis"  name="sinopsis" required value="<?=$pelicula->getSinopsis();?>"></td>
                <td><input type="number" placeholder="Puntuacion"  name="puntuacion" required value="<?=$pelicula->getPuntuacion();?>"></td>
                <td><input type="submit" name="accion" value="actualizar"></td>
                
            </tbody>
        </table>
        

    </form>
    
</section>
    </body>
</html>