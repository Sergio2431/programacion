<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado Usuarios</title>
    <link rel="stylesheet" href="text/css/"href="formulariolistado.css">
  </head>
  <body>
    <?php
        $conector = new mysqli("localhost","root","","programacion(5)");
        if ($conector->connect_errno){
          echo "Fallo al conectar a MySQL: " . $conector->connect_error;
        }else {
          $consulta=$conector->query('SELECT * FROM usuario');
            ?>
            <ol id="lista2">
              <?php
              foreach ($consulta as $fila) {
              ?>
                <li>
                  <?php
                    echo "USUARIO: ". $fila["nombre"]." ". $fila["apellidos"]." ". $fila["edad"]."años ". $fila["curso"]."<br>";
                  ?>
                </li>
                <?php
                }
                ?>
            </ol>
            <?php
        }
      ?>
  </body>
</html>
