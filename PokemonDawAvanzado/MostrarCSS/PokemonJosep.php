<?php
require_once "../Pokemon/JosepMetapod.php";
$JosepMetapod=new JosepMetapod();
?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/enlace_css.css">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
  </head>
  <body>
    <?php
      $pantalla="JosepMetapod";
    ?>
    <ul id="barra">
      <li><a class="<?php if ($pantalla=="JosepMetapod") echo "active";?>" href="JosepMetapod.php">Pokemon1</a></li>
      <li><a class="<?php if ($pantalla=="RegiMachop") echo "active";?>" href="RegiMachop.php">Pokemon2</a></li>
      <li><a class="<?php if ($pantalla=="PabloOnix") echo "active";?>" href="PabloOnix.php">Pokemon3</a></li>
      <li><a class="<?php if ($pantalla=="SergioMewtwo") echo "active";?>" href="SergioMewtwo.php">Ataques</a></li>
    </ul>
    <center>
      <form class="header" action="crear_usuario1.php" method="post"> <!-- formulario que registra a un usuario -->
        <h1>Regimon</h1>
        <img src="../imagenes/Machoke.png" alt="">
        <br><br>
        <div id="registro">
          <table>
            <h2>Stats</h2>
            <td><b>Vida</b></td>
            <td><span class="label label-default"><?php echo $regimon1->mostrarVida();?></span></td>
            <tr>
              <td><b>Ataque</b></td>
              <td><span class="label label-default"><?php echo $regimon1->mostrarAtaque();?></span></td>
            </tr>
            <tr>
              <td><b>Defensa</b></td>
              <td><span class="label label-default"><?php echo $regimon1->mostrarDefensa();?></span></td>
            </tr>
            <tr>
              <td><b>Velocidad &nbsp&nbsp&nbsp&nbsp&nbsp;</b></td>
              <td><span class="label label-default"><?php echo $regimon1->mostrarVelocidad();?></span></td>
            </tr>
          </table>
          <br><br>
          <table>
            <h2>Ataques</h2>
            <tr>
              <td><b>Mac </b></td>
              <td><span class="label label-default"><?php echo $regimon1->ataque1();?></span></td>
            </tr>
            <tr>
              <td><b>Windows &nbsp&nbsp&nbsp&nbsp;</b></td>
              <td><span class="label label-default"><?php echo $regimon1->ataque2();?></span></td>
            </tr>
          </table>
        </div>
        <br>
      </form>
    </center>
  </body>
</html>
