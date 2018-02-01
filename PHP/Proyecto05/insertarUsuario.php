<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Usuario</title>
    <link rel="stylesheet" type="text/css" href="Formulario.css">
  </head>
  <body>
    <center>
      <form class="header" action="listadoUsuario.php" method="post">
        <div id="Registro">
          <h1>Registro de Usuarios</h1>
          <div class="columna1">
            <tr>
              <td>Nombre</td>
              <td><input type="text" size="20" maxlength="80" name="Nombre" placeholder="Nombre del usuario"></td><br>
            </tr>
            <tr>
              <br><td>Apellidos</td>
              <td><input type="text" size="20" maxlength="80" name="Apellidos" placeholder="Apellidos del usuario"/></td><br>
            </tr>
            <tr>
              <br><td>Edad</td>
              <td><input type="text" size="20" maxlength="80" name="Edad" placeholder="Introduce la edad"></td><br>
            </tr>
            <tr>
              <br><td>Curso</td>
              <td><input type="text" size="20" maxlength="80" name="Curso" placeholder="Introduce el curso"></td><br>
            </tr>
            <tr>
              <br><td>Puntuación</td>
              <td><input type="text" size="20" maxlength="80" name="Puntuación" placeholder="Introduce la puntuación"></td><br>
            </tr>
          </div>
            <br><button type="submit">Registrarse</button>
            <button type="reset">Restablecer</button>
        </div>
      </form>
    </center>
  </body>
</html>
