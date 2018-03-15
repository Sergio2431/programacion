<?php
require "../Pokemon/PabloOnix.php";

$PabloOnix=new PabloOnix();

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Pokemon PabloOnix</title>
    <link rel="stylesheet" type="text/css" href="../css/enlace_pagina.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
  </head>
  <body>
    <?php
      $pantalla="PabloOnix";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="JosepMetapod") echo "active";?>" href="JosepMetapod.php">JosepMetapod</a></li>
      <li><a class="<?php if ($pantalla=="RegiMachop") echo "active";?>" href="RegiMachop.php">RegiMachop</a></li>
      <li><a class="<?php if ($pantalla=="PabloOnix") echo "active";?>" href="PabloOnix.php">PabloOnix</a></li>
      <li><a class="<?php if ($pantalla=="SergioMewtwo") echo "active";?>" href="SergioMewtwo.php">SergioMewtwo</a></li>
    </ul>
    <center>
      <form class="header" action="PabloOnix.php" method="post">
        <h1>PabloOnix</h1>
        <img src="../imagenes/Onix.png" alt="">
        <br><br>
        <div id="registro">
          <table>
            <h2>Estadisticas Básicas</h2>
            <td><b>Vida</b></td>
            <td><span class="label label-default"><?php echo $PabloOnix->mostrarVidaPablo();?></span></td>
            <tr>
              <td><b>Resistencia</b></td>
              <td><span class="label label-default"><?php echo $PabloOnix->mostrarResistenciaPablo();?></span></td>
            </tr>
            <tr>
              <td><b>Agilidad</b></td>
              <td><span class="label label-default"><?php echo $PabloOnix->mostrarAgilidadPablo();?></span></td>
            </tr>
          </table>
          <br><br>
          <table>
            <h2>Ataques</h2>
            <tr>
              <td><b>Repositorio</b></td>
              <td><span class="label label-default"><?php echo $PabloOnix->mostrarAtaqueRepositorio();?></span></td>
            </tr>
            <tr>
              <td><b>Programador</b></td>
              <td><span class="label label-default"><?php echo $PabloOnix->mostrarAtaqueProgramador();?></span></td>
            </tr>
          </table>
        </div>
        <br>
      </form>
    </center>
  </body>
</html>
