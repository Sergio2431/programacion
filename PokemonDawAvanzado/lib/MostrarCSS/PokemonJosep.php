<?php
require "../Pokemon/JosepMetapod.php";

$JosepMetapod=new JosepMetapod();

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
      $pantalla="JosepMetapod";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="JosepMetapod") echo "active";?>" href="JosepMetapod.php">JosepMetapod</a></li>
      <li><a class="<?php if ($pantalla=="RegiMachop") echo "active";?>" href="RegiMachop.php">RegiMachop</a></li>
      <li><a class="<?php if ($pantalla=="PabloOnix") echo "active";?>" href="PabloOnix.php">PabloOnix</a></li>
      <li><a class="<?php if ($pantalla=="SergioMewtwo") echo "active";?>" href="SergioMewtwo.php">SergioMewtwo</a></li>
    </ul>
    <center>
      <form class="header" action="JosepMetapod.php" method="post">
        <h1>JosepMetapod</h1>
        <img src="../imagenes/Metapod.png" alt="">
        <br><br>
        <div id="registro">
          <table>
            <h2>Estadisticas Básicas</h2>
            <td><b>Vida</b></td>
            <td><span class="label label-default"><?php echo $JosepMetapod->mostrarVidaJosep();?></span></td>
            <tr>
              <td><b>Resistencia</b></td>
              <td><span class="label label-default"><?php echo $JosepMetapod->mostrarResistenciaJosep();?></span></td>
            </tr>
            <tr>
              <td><b>Agilidad</b></td>
              <td><span class="label label-default"><?php echo $JosepMetapod->mostrarAgilidadJosep();?></span></td>
            </tr>
          </table>
          <br><br>
          <table>
            <h2>Ataques</h2>
            <tr>
              <td><b>Jala</b></td>
              <td><span class="label label-default"><?php echo $JosepMetapod->mostrarAtaqueJala();?></span></td>
            </tr>
            <tr>
              <td><b>Chupa</b></td>
              <td><span class="label label-default"><?php echo $JosepMetapod->mostrarDefensaChupa();?></span></td>
            </tr>
          </table>
        </div>
        <br>
      </form>
    </center>
  </body>
</html>
