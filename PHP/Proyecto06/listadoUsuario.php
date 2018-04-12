<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado Usuario</title>
    <link rel="stylesheet" type="text/css" href="Formulario.css">
  </head>
  <body>
    <?php
      $pantalla="Lista";
    ?>
      <ul id="barra">
      <li><a class="<?php if ($pantalla=="Crear") echo "active";?>" href="insertarUsuario.php">Crear Usuario</a></li>
      <li><a class="<?php if ($pantalla=="Actualizar") echo "active";?>" href="actualizarUsuario.php">Actualizar Usuario</a></li>
      <li><a class="<?php if ($pantalla=="Eliminar") echo "active";?>" href="eliminarUsuario.php">Eliminar Usuario</a></li>
      <li><a class="<?php if ($pantalla=="Lista") echo "active";?>" href="listadoUsuario.php">Lista de Usuarios</a></li>
      </ul>
    <center>
      <form class="header" action="listadoUsuario.php" method="post">
        <div id="Registro">
          <h1>Listado de Usuarios</h1>
          <div class="columna1">

        </div>
      </form>
    </center>
  </body>
</html>
