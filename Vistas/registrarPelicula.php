<?php require 'include/header.php';?>
<body>
    <section>
        <br>
        <h1>REGISTRAR PELICULA</h1>
        <form method="post" action="../Controladores/LibroController.php">		
            <input type="file" required="" name="afiche"/><br><br>
            <input type="text" placeholder="Código" name="codigo" required>
            <input type="text" placeholder="Titulo"  name="titulo" required>
            <input type="text" placeholder="Director"  name="director" required>
            <input type="text" placeholder="Sinopsis"  name="sinopsis" required>
            <input type="number" placeholder="Puntuacion"  name="puntuacion" required>
            <input type="submit" name="accion" value="registrar">
        </form>
    </section>
    </body>
</html>