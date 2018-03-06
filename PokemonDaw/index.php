<?php
require "lib/Pokemon/RegiMachop.php";

$primerHeroe= new RegiMachop();
$segundoHeroe= new RegiMachop();
$segundoHeroe->restarVida(10);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Uso de Herencia</title>
  </head>
  <body>
    <?php
    echo "Primer Personaje tiene". $primerHeroe->getvida()." puntos de vida<br>";
    echo "Segundo Personaje tiene". $primerHeroe->getvida()." puntos de vida";
    ?>
  </body>
</html>
