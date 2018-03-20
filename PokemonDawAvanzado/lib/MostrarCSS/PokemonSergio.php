<?php
require "../Pokemon/SergioMewtwo.php";

$SergioMewtwo=new SergioMewtwo();

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
      $pantalla="SergioMewtwo";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="JosepMetapod") echo "active";?>" href="PokemonJosep.php">JosepMetapod</a></li>
      <li><a class="<?php if ($pantalla=="RegiMachop") echo "active";?>" href="PokemonRegi.php">RegiMachop</a></li>
      <li><a class="<?php if ($pantalla=="PabloOnix") echo "active";?>" href="PokemonPablo.php">PabloOnix</a></li>
      <li><a class="<?php if ($pantalla=="SergioMewtwo") echo "active";?>" href="PokemonSergio.php">SergioMewtwo</a></li>
    </ul>
    <center>
      <form class="header" action="SergioMewtwo.php" method="post">
        <h1>SergioMewtwo</h1>
        <img src="../imagenes/Mewtwo.png" alt="">
        <br><br>
        <div id="registro">
          <table>
            <h2>Estadisticas Básicas</h2>
            <td><b>Vida</b></td>
            <td><span class="label label-default"><?php echo $SergioMewtwo->mostrarVidaSergio();?></span></td>
            <tr>
              <td><b>Resistencia</b></td>
              <td><span class="label label-default"><?php echo $SergioMewtwo->mostrarResistenciaSergio();?></span></td>
            </tr>
            <tr>
              <td><b>Agilidad</b></td>
              <td><span class="label label-default"><?php echo $SergioMewtwo->mostrarAgilidadSergio();?></span></td>
            </tr>
          </table>
          <br><br>
          <table>
            <h2>Ataques</h2>
            <tr>
              <td><b>Muleta</b></td>
              <td><span class="label label-default"><?php echo $SergioMewtwo->mostrarAtaqueMuleta();?></span></td>
            </tr>
            <tr>
              <td><b>Pierna Loca</b></td>
              <td><span class="label label-default"><?php echo $SergioMewtwo->mostrarAtaquePiernaLoca();?></span></td>
            </tr>
          </table>
        </div>
        <br>
      </form>
    </center>
  </body>
</html>
