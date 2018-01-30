<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Usuario</title>
  </head>
  <body>
    <center>
      <form action="proyecto5-2.php" method="post">
        <div id="Registro">
          <h1>Registro de Usuarios</h1>
          <tr>
            <td>Nombre</td>
            <td><input type="text" size="20" maxlength="80" name="Nombre" placeholder="Nombre del usuario"></td>
            <br>
          </tr>
          <tr>
            <br>
            <td>Apellidos</td>
            <td><input type="text" size="20" maxlength="80" name="Apellidos" placeholder="Apellidos del usuario"/></td>
            <br>
          </tr>
          <tr>
            <br>
            <td>Edad</td>
            <td><input type="text" size="20" maxlength="80" name="Edad" placeholder="Introduce la edad"></td>
            <br>
          </tr>
          <tr>
            <br>
            <td>Curso</td>
            <td><input type="text" size="20" maxlength="80" name="Curso" placeholder="Introduce el curso"></td>
            <br>
          </tr>
          <tr>
            <br>
            <td>Puntuación</td>
            <td><input type="text" size="20" maxlength="80" name="Puntuación" placeholder="Introduce la puntuación"></td>
            <br>
          </tr>
          <br>
            <form class="" action="listadoUsuario.php" method="post">
              <input type="submit" value="Enviar este formulario" />
            </form>
        </div>
      </form>
  </body>
</html>
