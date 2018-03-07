<?php
require "lib/Pokemon/RegiMachop.php";
require "lib/Enemigo/JosepJala.php";

$primerHeroe= new RegiMachop("Pokemon RegiMachop");
$segundoHeroe= new JosepJala("Pokemon JosepJala");

$primerHeroe->sumarVida(500)
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
