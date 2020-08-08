<?php 
  require 'include/header.php';
  require dirname(__DIR__).'/LogicaNegocio/GeneroServicios.php';
  
  
  
  if(isset($_GET['id'])){
      $id  = $_GET['id'];
      $servicios = new GeneroServicios();
      $genero = $servicios->obtenerGeneroById($id);
      
  
  }
?>
    <body>
    <section>
        <br>
    <h3>AQUI PUEDE EDITAR LA INFORMACION DE GENERO</h3>
    <form method="post" action="../Controladores/generoController.php">
        <table id="t1" border="1">
            <thead>
                
                <tr>
                        <th>ID</th>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th></th>
                </tr>

            </thead>
            
            <tbody>
  
                <tr>
                <td><input type="text"  name="id" readonly="" value="<?=$genero->getId();?>"></td>       
                <td><input type="text" placeholder="Código" name="codigogenero" value="<?=$genero->getCodigogenero();?>"></td>       
                <td><input type="text" placeholder="Nombre"  name="nombregenero" value="<?=$genero->getNombregenero();?>"> </td>       
                <td><input type="submit" name="accion" value="actualizar"></td>
                </tr>

            </tbody>
        </table>
        

    </form>
    
</section>
    </body>
</html>

 