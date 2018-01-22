<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lectura paises</title>
  </head>
  <body>
    <h1>Paises del mundo</h1>
    <?php
    $conector = new mysqli("localhost", "root", "", "world");
    if ($mysqli->connect_errno) {
      echo "Fallo al conectar a MySQL: ". $conector->connect_error;
    }else {
      //Interación con la base de datos
      echo "<h1>Paises del mundo </h1>";
      $resultado=$conector->query("SELECT * FROM country");
      while($fila=$resultado->fetch_assoc()){
                echo "El pais ".$fila[`NAME`]."<br>";
      }
      }
    ?>
  </body>
</html>
