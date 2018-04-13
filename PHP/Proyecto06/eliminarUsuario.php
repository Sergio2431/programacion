<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliminar Usuario</title>
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
      <form class="header" action="eliminarUsuario1.php" method="post">
        <div id="Registro">
          <h1>Eliminar Usuarios</h1>
          <div class="columna1">
            <table>
            <tr>
              <td><b>Usuario</b></td>
              <td>
                <select id="seleccionar_usuario" name="seleccionar_usuario">
                  <?php
                    $conector = new mysqli("localhost","root","","programacion1");
                    if ($conector->connect_errno){
                      echo "Fallo al conectar a MySQL: " . $conector->connect_error;
                    }else {
                      $consulta=$conector->query('SELECT nombre FROM usuario');
                      ?>
                      <ol id="lista2" name="UsuarioEliminar">
                        <?php
                        foreach ($consulta as $fila) {
                        ?>
                          <option>
                            <?php
                              echo $fila["nombre"]."<br>";
                            ?>
                          </option>
                            <?php
                            }
                            ?>
                      </ol>
                      <?php
                      }
                      ?>
                  </select>
                </td>
              </tr>
            </table>
          </div>
            <br><button type="submit">Eliminar</button>
            <button type="reset">Restablecer</button>
        </div>
      </form>
    </center>
  </body>
</html>
