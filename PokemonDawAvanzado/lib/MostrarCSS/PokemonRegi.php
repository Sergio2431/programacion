<?php
require "../Pokemon/RegiMachop.php";

$RegiMachop=new RegiMachop();

?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/enlace_pagina.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
  </head>
  <body>
    <?php
      $pantalla="RegiMachop";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="JosepMetapod") echo "active";?>" href="JosepMetapod.php">JosepMetapod</a></li>
      <li><a class="<?php if ($pantalla=="RegiMachop") echo "active";?>" href="RegiMachop.php">RegiMachop</a></li>
      <li><a class="<?php if ($pantalla=="PabloOnix") echo "active";?>" href="PabloOnix.php">PabloOnix</a></li>
      <li><a class="<?php if ($pantalla=="SergioMewtwo") echo "active";?>" href="SergioMewtwo.php">SergioMewtwo</a></li>
    </ul>
    <center>
      <form class="header" action="RegiMachop.php" method="post">
        <h1>RegiMachop</h1>
        <img src="../imagenes/Machop.png" alt="">
        <br><br>
        <div id="registro">
          <table>
            <h2>Estadisticas Básicas</h2>
            <td><b>Vida</b></td>
            <td><span class="label label-default"><?php echo $RegiMachop->mostrarVidaRegi();?></span></td>
            <tr>
              <td><b>Resistencia</b></td>
              <td><span class="label label-default"><?php echo $RegiMachop->mostrarResistenciaRegi();?></span></td>
            </tr>
            <tr>
              <td><b>Agilidad</b></td>
              <td><span class="label label-default"><?php echo $RegiMachop->mostrarAgilidadRegi();?></span></td>
            </tr>
          </table>
          <br><br>
          <table>
            <h2>Ataques</h2>
            <tr>
              <td><b>Furia</b></td>
              <td><span class="label label-default"><?php echo $RegiMachop->mostrarAtaqueFuria();?></span></td>
            </tr>
            <tr>
              <td><b>Queja</b></td>
              <td><span class="label label-default"><?php echo $RegiMachop->mostrarAtaqueQueja();?></span></td>
            </tr>
          </table>
        </div>
        <br>
      </form>
    </center>
  </body>
</html>
