<?php

require "./lib/Pokemon/RegiMachop.php";
require "./lib/Pokemon/JosepJala.php";

$primerHeroe= new RegiMachop("Pokemon RegiMachop");
$segundoHeroe= new JosepJala("Pokemon JosepJala");

$primerHeroe->restarVida(75);
$segundoHeroe->restarVida(10);


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Uso de Herencia</title>
  </head>
  <body background-image: url("pokemon.png")>
    <?php
    echo "RegiMachop tiene ". $primerHeroe->getvida()." puntos de vida<br>";
    echo "JosepJala tiene ". $segundoHeroe->getvida()." puntos de vida";
    ?>
  </body>
</html>
