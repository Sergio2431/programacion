<?php
require "lib/Pokemon/RegiMachop.php";

<<<<<<< HEAD
$primerHeroe= new Superman();
$segundoHeroe= new Superman();

=======
$primerHeroe= new RegiMachop();
$segundoHeroe= new RegiMachop();
>>>>>>> 0f530981a43586175737cbb5151aa81ea699ab64
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
