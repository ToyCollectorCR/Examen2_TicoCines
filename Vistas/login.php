<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tico-Cines</title>
    </head>
    <body>
        <section>
            <br>
            <h1>INGRESAR</h1>
            <form method="post" action="../Controladores/UsuarioController.php">		
                    <input type="text" placeholder="Correo" name="correo" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <input type="submit" name="accion" value="Ingresar">
            </form>
        </section>        
    </body>
</html>