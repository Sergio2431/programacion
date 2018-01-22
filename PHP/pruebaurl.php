<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prueba de URL GET</title>
  </head>
  <body>
    <?php
      $conector = new mysqli("localhodt",
      "root", "root", "world");
      if ($conector-<connect_errno){
        echo "Fallo al conectar a MySQL: ".$conector->connect_errno;
      }else{
        echo "Conectado a la DB";
        $code=$_GET["code"]
        echo "El código recibido es: " .$_GET["code"];
        echo "<br>";
        $resultado = $conector->query("SELECT * FROM
          WHERE Code='".$_GET["code"]."'");
          foreach ($resultado as $fila) {
          echo "EL país buscando es:".$fila["Name"]
        }
      }
    ?>
  </body>
</html>
