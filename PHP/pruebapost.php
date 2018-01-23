<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de Post</title>
  </head>
  <body>
    <?php
    $conector = new mysqli("localhost",
    "root", "root", "world");
    if ($conector-<connect_errno){
      echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
    }else{
      $code=$_POST["Code"];
      $continent=$_POST["Continent"];

      $consulta="SELECT * FROM country WHERE
      Code='$code' AND Continent='$continente'";
      echo "<br>";
      echo $consulta;
      $resultado=$conector->query($consulta);
        foreach ($resultado as $fila) {
          echo "<br>El país buscado es:".$fila["Name"];
      }
    }
     ?>
  </body>
</html>
