<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tico-Cines</title>
    </head>
    <body>
        <section>
            <br>
            <h1>INGRESO ADMINISTRADOR</h1>
            <form method="post" action="../Controladores/adminController.php">		
                    <input type="text" placeholder="Correo" name="correo" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" name="accion" value="Ingresar">
            </form>
        </section> 
        
        <nav>
            <ul>
                <li><a href="listaPeliculas.php">Listado de Peliculas</a></li>
            </ul>
        </nav> 
        
    </body>
</html>